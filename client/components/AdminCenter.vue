<template>
  <div class="theme">
  <ColorModePicker />
</div>
  <!-- <div>
    <div class="row">
      <div class="col-6">
        <h3>Admin Center</h3>
      </div>
    </div>
  </div> -->
  
</template>
<script>
import ColorModePicker from '@/components/ColorModePicker'

export default {
  components: {
      ColorModePicker
    }
};
</script>
<style>
.theme {
    text-align: center;
    padding: 50px;
  }
body{
  color: black;
}
</style>