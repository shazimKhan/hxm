<template>
  <v-app>
    <!-- <b-form-checkbox v-model="checked" name="check-button" switch right >
        <p v-if= "checked">Switch to Sidebar</p>
        <p v-else>Switch to Navbar</p>
      </b-form-checkbox> -->

    
    <!-- <Navbar v-if="checked" /> -->
    <Appbar v-if="checked" />

    <Sidebar v-if="!checked"/>       

    <v-layout v-if="user" class="justify-end mr-6">
      <v-switch
        v-model="checked"
        :label="`Switch: ${switch1.toString()}`"
      ></v-switch>
    </v-layout> 

    <v-main>
      <nuxt /> 
    </v-main>  

  </v-app>
 
</template>

<script>
import { mapGetters} from 'vuex'
import Appbar from '~/components/Appbar'
import Sidebar from '~/components/Sidebar'

export default {
  components: {
    Appbar,
    Sidebar,
  },
  data () {
      return {
        switch1: false,
        checked: true,
      }
    },
    computed: mapGetters({
      user: 'auth/user',
    }),
}
</script>



<!--<template>
  <div class="layout">
    <navbar />

    <div class="container-fluid">
      <nuxt />
    </div>
  </div>
</-template>

<script>
import Navbar from '~/components/Navbar'

export default {
  components: {
    Navbar
  }
}
</script>-->
