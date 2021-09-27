<template>
  <div id="leave-approval">
    <LeaveApprove />
  </div>
</template>

<script>
import LeaveApprove from '@/components/LeaveApprove/LeaveApprove'
export default {
  components: {
    LeaveApprove
  },
  middleware: ['auth', 'check-role']
}
</script>

<style>

</style>
