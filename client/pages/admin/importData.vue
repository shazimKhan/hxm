<template>
<v-app>
  <v-card
    outlined
    height="100%"
    >
    <v-card-text>
      <p class="text-h4 text--primary">
      Excel Import Table Data
      </p>
    
      <v-card-actions>

      <label>File
        <input type="file" name="import_file" ref="file" v-on:change="onChangeFileUpload()"/>
      </label>

      <v-btn
        color="primary"
        small
        @click="importData()"
      >
        Import Data
      </v-btn>
      </v-card-actions>
    
    </v-card-text>
  </v-card>

      <!-- <v-row>
        <v-col cols="6">
          <v-file-input
            show-size
            outlined
            dense
            label="File input"
            v-model="file"
            v-on:change="onChangeFileUpload()"
          ></v-file-input>
        </v-col>

        <v-col cols="4" class="pl-2">
          <v-btn color="success" v-on:click="importData()">
            Import Data
            <v-icon right dark>mdi-cloud-upload</v-icon>
          </v-btn>
        </v-col>
      </v-row> -->
</v-app>
</template>
  
<script>

  export default {
    data(){
      return {
        file: null
      }
    },
  
    methods: {

      importData(){
        let formData = new FormData();
        formData.append('import_file', this.file);

        this.$axios.post('import-data',
            formData,
            {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
          }
        ).then(function(data){
          console.log(data.data);
        })
        .catch(function(){
          console.log('FAILURE!!');
        });
      },
  
      onChangeFileUpload(){
        this.file = this.$refs.file.files[0];
      }
    }
  }
</script>