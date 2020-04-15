<template>
  <div>
      <v-data-table
      :headers="headers"
      :items="tableDefinations"
      :disable-pagination="true"
      :hide-default-footer="true"
      :loading="loadingStatus" 
      class="elevation-1"
      >
      <template v-slot:top>
        <v-toolbar flat color="white">
          <v-toolbar-title>Table Definitions</v-toolbar-title>
          <v-divider
            class="mx-4"
            inset
            vertical
          ></v-divider>
          <v-select
            :items="tableList"
            item-text="table_name"
            item-value="id"
            label="Table List"
            :clearable="true"
            v-model="sortSelectedTable"
            v-on:change="sortByTable()"
          ></v-select>
          <v-spacer></v-spacer>
          <v-dialog v-model="dialog" max-width="500px">
            <template v-slot:activator="{ on }">
              <v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>
            </template>
            <v-card>
              <v-card-title>
                <span class="headline">{{ formTitle }}</span>
              </v-card-title>

              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col cols="12" sm="6" md="4">
                      <!-- <v-text-field type="text" v-model="editedItem.tables_id" label="Table Name"></v-text-field> -->
                      <v-select
                        :items="tableList"
                        item-text="table_name"
                        item-value="id"
                        label="Table Name"
                        v-model="editedItem.tables_id"
                      ></v-select>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="text" v-model="editedItem.column_name" label="Column Name"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="text" v-model="editedItem.data_type" label="Data Type"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="number" v-model="editedItem.length" label="Length"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="number" v-model="editedItem.maximum_number" label="Max Number"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="number" v-model="editedItem.decimal_part" label="Decimal Part"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field type="text" v-model="editedItem.validation" label="Validation"></v-text-field>
                    </v-col>
                  </v-row>
                </v-container>
              </v-card-text>

              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                <v-btn color="blue darken-1" text @click="save">Save</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-toolbar>
      </template>
      <template v-slot:item.actions="{ item }">
        <v-icon
          small
          class="mr-2"
          @click="editItem(item)"
        >
          mdi-pencil
        </v-icon>
        <v-icon
          small
          @click="deleteItem(item)"
        >
          mdi-delete
        </v-icon>
      </template>
      <template v-slot:no-data>
        <v-btn color="primary" @click="getTableDefinations">Reset</v-btn>
      </template>
    </v-data-table>
    <v-snackbar
      v-model="snackbarProperty.snackbar"
      :color="snackbarProperty.color"
      :right="snackbarProperty.x === 'right'"
      :timeout="snackbarProperty.timeout"
      :top="snackbarProperty.y === 'top'"
    >
      {{ snackbarProperty.text }}
      <v-btn
        dark
        text
        @click="snackbarProperty.snackbar = false"
      >
        Close
      </v-btn>
    </v-snackbar>
  </div>
</template>


<script>
  export default {
    data: () => ({
      loadingStatus: true, // This will show loading bar on initialization
      dialog: false,
      headers: [
        {
          text: 'Table',
          align: 'start',
          value: 'tableName',
        },
        { text: 'Column', value: 'column_name' },
        { text: 'Data Type', value: 'data_type' },
        { text: 'Length', value: 'length' },
        { text: 'Maximum Number', value: 'maximum_number' },
        { text: 'Decimal Part', value: 'decimal_part' },
        { text: 'Validation', value: 'validation' },
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      tableDefinations: [],
      tableList: [],
      sortSelectedTable: '',
      // selectedTableEdit: '',
      desserts: [],
      editedIndex: -1,
      editedItem: {
        tables_id: '',
        tableName: '',
        column_name: '',
        data_type: '',
        length: 0,
        maximum_number: 0,
        decimal_part: 0,
        validation: '',
      },
      defaultItem: {
        tables_id: '',
        tableName: '',
        column_name: '',
        data_type: '',
        length: 0,
        maximum_number: 0,
        decimal_part: 0,
        validation: '',
      },
      
      snackbarProperty: {
        snackbar: false, 
        color: '',
        // mode: 'vertical',
        text: '',
        timeout: 5000, 
        x: 'right', 
        y: 'top',
      },
      validationErrors: '',
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
    },

    created () {
      this.getTableDefinations();
      this.getTableList();
    },

    methods: {

      showSnackBar(text, color){
        this.snackbarProperty.snackbar  = true;
        this.snackbarProperty.text      = text; 
        this.snackbarProperty.color     = color;
      },
      
      getTableDefinations(){
        axios
          .get('/api/v1/table-definations')
          .then(response => {
            this.tableDefinations = response.data;
            this.loadingStatus    = false; // This will remove loading bar
            this.showSnackBar('Data Fetched Successfully!', 'success');
          })
          .catch(error => console.log(error))
          
      },

      getTableList(){
        axios
          .get('/api/v1/tables')
          .then(response => {
            this.tableList = response.data;
          })
          .catch(error => console.log(error))
      },

      sortByTable(){
        this.loadingStatus    = true;
        if(this.sortSelectedTable){
        	axios
	          .get(`/api/v1/table-definations?id=${this.sortSelectedTable}`)
	          .then(response => {
	            this.tableDefinations = response.data;
	            this.loadingStatus    = false; // This will remove loading bar
	            this.showSnackBar('Data Sorted Successfully!', 'error');
	          })
	          .catch(error => console.log(error))
        }
        else{
        	this.getTableDefinations();
        }
      },

      editItem (item) {
        this.editedIndex = this.tableDefinations.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true;
        this.showSnackBar('An Error Snackbar!', 'error');
      },

      deleteItem (item) {
        const index = this.tableDefinations.indexOf(item); 
        console.log(item);
        if(confirm('Are you sure you want to delete this item?')){
          axios
            .post('/api/v1/delete/table-definations', item)
            .then(response => {
              console.log(response);
              this.tableDefinations.splice(index, 1)
              this.showSnackBar('Deleted Successfully!', 'success');
            })
            .catch(error => {
              console.log(error.response)
            })           
        }
      },

      close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

      save () {    	
        if (this.editedIndex > -1) {
        	var updateIndex = this.editedIndex;
          axios
            .post('/api/v1/update/table-definations', this.editedItem)
            .then(response => {
              // console.log(response);
              Object.assign(this.tableDefinations[updateIndex], response.data)
              this.showSnackBar('Updated Successfully!', 'success');
            })
            .catch(error => {
              console.log(error.response)
            })
        } else {
          axios
            .post('/api/v1/add/table-definations', this.editedItem)
            .then(response => {
              console.log(response);
              this.showSnackBar('Created Successfully!', 'success');
              this.tableDefinations.push(response.data)
            })
            .catch(error => {
              console.log(error.response)
            })
        }
        this.close()
      },
    },
  }
</script>