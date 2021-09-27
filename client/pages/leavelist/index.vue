<template>
  <div id="leavelist">
    <LeaveList />
  </div>
</template>

<script>
import LeaveList from '@/components/Leavelist/LeaveList'
export default {
  components: {
    LeaveList
  },
  middleware: 'auth'
}
</script>

<style>

</style>
