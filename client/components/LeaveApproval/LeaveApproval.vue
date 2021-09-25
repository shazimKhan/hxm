<template>
 <div class="leave">
    <a-card class="teamAbsense">
      <h5>Team Absense Calender</h5>
    </a-card>
    <a-card>
      <a-row>
        <a-col :span="5">
          <h6>My Reporting Hirarchy</h6>
          <a-divider></a-divider> 
          <a-row>
             <a-col :span="6">
              <div>
                <a-row> 
                    <div class="reporties" v-for="peers in itemList" :key="peers">
                    <a-avatar :size="30" icon="user" />{{ peers }}
                    <a-divider></a-divider>
                    </div>
                </a-row>
              </div>
            </a-col>
          </a-row>
        </a-col>
        <a-col :span="16">
          <a-tabs default-active-key="1" >
            <a-tab-pane key="1" tab="My Peers">
              
<a-row>
      <a-col :span="8">
      
      </a-col>
      <a-col :span="16">
        <div class="create-btn text-bottom right">
            <a-button type="primary">
              <nuxt-link to="/leave-approval"> Leave Approval for Peers </nuxt-link>
            </a-button>
          </div>
          <br>
        <div class = " calender">
      <FullCalendar :options="calendarOptions" /> 
        </div>
    </a-col>
</a-row> 
 

          </a-tab-pane>
          <a-tab-pane key="2" tab="My Direct Reporties">
      
<a-row>
      <a-col :span="8">
      
      </a-col>
      <a-col :span="16">
         <div class="create-btn text-bottom right">
            <a-button type="primary">
              <nuxt-link to="/leave-approval"> Leave Approval For Direct Reporties </nuxt-link>
            </a-button>
         </div>
         <br>
      <FullCalendar :options="calendarOptions" /> 
  
         </a-col>
         </a-row>   
            </a-tab-pane>
          </a-tabs>
        </a-col>
        
      </a-row>
    </a-card>
  </div>

</template>
<script>
// Load CSS from the published version

import '@fullcalendar/core/vdom' // solves problem with Vite
import FullCalendar from '@fullcalendar/vue'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import Datepicker from "vuejs-datepicker";
import moment from "moment";

function calculateRange(totalDays, startDate) {
  let selectedDays=[]
  for(let i=1;i<=totalDays;i++) {
    const calculatedDate=moment().date(i)
    const finalDate={
      day: calculatedDate.format("D"),
      dayName: calculatedDate.format("ddd"),
      fullDate: calculatedDate,
      isHoliday: calculatedDate.format("ddd")==="Sat"||
        calculatedDate.format("ddd")==="Sun",
    }
    selectedDays.push(finalDate)
  }
  return selectedDays
}
const columns = [
  {
    dataIndex: 'name',
  },
];
const data = [


];

const coloumn = [
  {
    dataIndex: 'name',
  },
];

export default {
  data() {
    return {
      itemList: ["Khubaib", "Faizan"],
      mypeers:["a", "b"],
      selectedOrgs: [],
      size: 'large',
      calendarOptions: {
      plugins: [ dayGridPlugin, interactionPlugin ],
      initialView: 'dayGridMonth',
      },
      data,
      columns,
    
    };
  },
  
  components: {
    FullCalendar,
    Datepicker,
    moment,
  },
  methods: {
    onChange(e) {
      console.log(e);
      console.log(this.selectedOrgs);

    },
  },
};

</script>
<style lang="scss">
.teamAbsense {
  padding: 2px;
  background-color: rgb(206, 218, 240);
}

</style>
