<template>
<div class="leaveapproves">   

  <h2> Leave Approval  </h2>
  <br>

  <a-table :columns="columns" :data-source="data">
    <a slot="name" slot-scope="text">{{ text }}</a>
  </a-table>
  <LeaveList />
</div>
 
</template>
<script>
const columns = [
   {
    title: 'ID',
  },
  
  {
    title: 'Employee Name',
  },
  
  {
    title: 'Leave Type',
  },
  
  {
    title: 'Date From',
  },
  {
    title: 'Date To',
  },
  {
    title: 'Days',
  },
  {
    title: 'Reason',
  },
    {
    title: 'Request for Approval',
  },
];
const data = [
  {
    key: '1',
    
  },
  {
    key: '2',
  },
  {
    key: '3',
  },
 
];
export default {
  data() {
    return {
        loading: false,
      data,
      columns,
    };
  },
 };
</script>

<style>


</style>
