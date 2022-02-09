<template>
  <v-app>
    <v-card
      outlined
      height="100%"
      >
      <v-card-text>
        <p class="text-h4 text--primary">
          Excel Import Table and Form Data
        </p>
      
        <v-card-actions>

        <label>File
          <input type="file" name="import_file" ref="file" v-on:change="onChangeFileUpload()"/>
        </label>
          <v-btn color="success" @click="importTable()" :loading="loading">
            Import Table
          </v-btn>
          <v-btn color="primary" @click="importForm()"  :loading="loading2">
            Import Form
          </v-btn>
        </v-card-actions>
      
      </v-card-text>
    </v-card>     
  </v-app> 
</template>
  
<script>

  export default {
    data(){
      return {
        file: '',
        clicked: true,
        loading: false,
        loading2: false
      }
    },

    // mounted() {
    //     this.isDisabled(true);
    // },
  
    methods: {
      async importTable(){
        this.loading = true;
        // setTimeout(() => {  console.log("World!"); }, 15000);
        
        let formData = new FormData();
        formData.append('import_file', this.file);

        await this.$axios.post('import-table',
            formData,
            {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
          }
        ).then((resp) => {
          
          if(resp.status === 200){
              // this.$router.go();
              // this.$toast.success(resp.data.msg);
              this.loading =false;
              this.clicked = false;
          }

        }).catch((error) => {
          console.log(error);
          // this.$toast.error(error);
          this.loading = false;
        });
      },

      async importForm(){
        this.loading2 = true;
        let formData = new FormData();
        formData.append('import_file', this.file);

        await this.$axios.post('import-form',
            formData,
            {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
          }
        ).then((resp) => {
          
          if(resp.status === 200){
              // this.$router.go();
              // this.$toast.success(resp.data.msg);
              this.loading2 =false;
          }

        }).catch((error) => {
          console.log(error.message);
          // this.$toast.error(error.message);
          this.loading2 = false;
        })
      },
  
      onChangeFileUpload(){
        this.file = this.$refs.file.files[0];
      },

      isDisabled(click) {
        return click;
      }
    }
  }
</script>