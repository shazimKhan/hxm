<template>
  <div class="leave">
    <a-card class="teamAbsense">
      <h3>Team Absense Calender</h3>
    </a-card>
    <a-card>
      
      <a-row>
        <a-col :span="5">
          <h6>My Reporting Hirarchy</h6>
          <a-divider></a-divider>
          <a-row>
            <a-col :span="10">
              <div>
                <a-row> 
                    <div class="reporties" v-for="peers in itemList" :key="peers">
              
                    <a-avatar :size="35" icon="user" />{{ peers }}
                    <a-divider></a-divider>
                    </div>
                    
                </a-row>
              </div>
            </a-col>
          </a-row>
        </a-col>
        
        <a-col :span="19">
          <a-tabs default-active-key="1" >
            <a-tab-pane key="1" tab="My Peers">
                     <FullCalendar :options="calendarOptions" />          
            </a-tab-pane>
            
            <a-tab-pane key="2" tab="My Direct Reporties">
              <!-- <a-card> My Direct Reporties 
                  <ul>
                      <li v-for="peers in mypeers" :key="peers">
                        {{ peers }}
                      </li>
                  </ul> 
              </a-card> -->
 <FullCalendar :options="calendarOptions" />   
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



const calculateRange = (totalDays, startDate) => {
  let selectedDays = [];
  for (let i = 1; i <= totalDays; i++) {
    const calculatedDate = moment().date(i);
    const finalDate = {
      day: calculatedDate.format("D"),
      dayName: calculatedDate.format("ddd"),
      fullDate: calculatedDate,
      isHoliday:
        calculatedDate.format("ddd") === "Sat" ||
        calculatedDate.format("ddd") === "Sun",
    };
    selectedDays.push(finalDate);
  }
  return selectedDays;
};

export default {
  data() {
    return {
      itemList: ["Khubaib", "Faizan"],
      mypeers:["a", "b"],
      selectedOrgs: [],
      size: 'large',
      calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth'
      }
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
  padding: 25px;
  background-color: rgb(206, 218, 240);
}
.calender-box{
    border-left: 1px solid rgba(128, 128, 128, 0.67843);
    width: 30px;
    height: 55px;
    border-right: 1px solid rgba(128, 128, 128, 0.67843);
}
.ant-table-thead > tr > th, .ant-table-tbody > tr > td{
  padding: 0px 16px;
}
.calender-col{
  width:unset;
}
.horizontal-calendar{
  width: 80%;
  margin-left: 192px;
}

</style>
