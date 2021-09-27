<template>
  <div id="apply-leave">
    <ApplyLeaves />
  </div>
</template>

<script>
import ApplyLeaves from '@/components/ApplyLeave/ApplyLeaves'
export default {
  components: {
    ApplyLeaves
  },
  middleware: 'auth'
}
</script>

<style>

</style>
