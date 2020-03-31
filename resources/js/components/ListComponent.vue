<template>
  <v-data-table
    :headers="headers"
    :items="tableDefinations"
    sort-by="calories"
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
                    <v-text-field v-model="editedItem.table_name" label="Table Name"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.column_name" label="Column Name"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.data_type" label="Data Type"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.length" label="Length"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.maximum_number" label="Max Number"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.decimal_part" label="Decimal Part"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.validation" label="Validation"></v-text-field>
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
      <v-btn color="primary" @click="initialize">Reset</v-btn>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    data: () => ({
      dialog: false,
      headers: [
        {
          text: 'Table',
          align: 'start',
          value: 'table_name',
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
      desserts: [],
      editedIndex: -1,
      editedItem: {
        table_name: '',
        column_name: '',
        data_type: '',
        length: 0,
        maximum_number: 0,
        decimal_part: 0,
        validation: '',
      },
      defaultItem: {
        table_name: '',
        column_name: '',
        data_type: '',
        length: 0,
        maximum_number: 0,
        decimal_part: 0,
        validation: '',
      },
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
    },

    methods: {
      
      getTableDefinations(){
        axios
          .get('/api/v1/table-definations')
          .then(response => {
            this.tableDefinations = response.data;
          })
          
      },

      editItem (item) {
        this.editedIndex = this.tableDefinations.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (item) {
        const index = this.tableDefinations.indexOf(item)
        confirm('Are you sure you want to delete this item?') && this.tableDefinations.splice(index, 1)
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
          Object.assign(this.tableDefinations[this.editedIndex], this.editedItem)
        } else {
          this.tableDefinations.push(this.editedItem)
        }
        this.close()
      },
    },
  }
</script>