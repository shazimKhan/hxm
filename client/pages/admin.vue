<template>
  <div>
    <AdminCenter v-if="moduleList == 'admin-center'" />
    <WorkSchedule v-else-if="moduleList == 'work-schedule'" />
    <LeaveManagement v-else-if="moduleList == 'leave-management'" />
    <EmployeeProfile v-else-if="moduleList == 'employee-profile'"/>
    <TimeSheet v-else/>
  
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import AdminCenter from "@/components/AdminCenter.vue";
import WorkSchedule from "@/components/WorkSchedule.vue";
import LeaveManagement from "@/components/LeaveManagement.vue";
import EmployeeProfile from "@/components/EmployeeProfile.vue";
import TimeSheet from "@/components/TimeSheet/TimeSheet.vue";
export default {
  middleware: "auth",
  components: {
    AdminCenter,
    WorkSchedule,
    LeaveManagement,
    EmployeeProfile,
    TimeSheet

  },
  computed: mapGetters({
    moduleList: "admin-center/getModuleList",
  }),
  head () {
    return { title: this.$t('home') }
  },

};
</script>
