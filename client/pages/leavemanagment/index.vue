<template>
  <div>
    <LeaveManagement />
  </div>
</template>

<script>

import LeaveManagement from '@/components/LeaveManagement.vue'

export default {
  components: {
    LeaveManagement
  },
  middleware: 'auth'
}
</script>

<style>

</style>
