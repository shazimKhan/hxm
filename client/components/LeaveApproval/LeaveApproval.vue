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
                        <a-checkbox @change="onChange(peers)" v-bind:value="{selectedOrgs: peers}" > </a-checkbox>
                    <a-avatar :size="35" icon="user" />{{ peers }}
                    <a-divider></a-divider>
                    </div>
                    
                </a-row>
              </div>
            </a-col>
          </a-row>
        </a-col>
        
        <a-col :span="15">
          <a-tabs default-active-key="1" @change="callback">
            <a-tab-pane key="1" tab="My Peers">
              <a-card>
                <a-month-picker
                  :size="size"
                  @change="monthPickerChange"
                  placeholder="Month"
                  default="currentMonth"
                  format="MMMM,YY" 
                />
                <a-divider dashed/>
            
                <table> 
                  <thead>
                    <tr>
                      <th />
                      <th v-for="date in calculatedRange" :key="{ date }">
                         {{ date.dayName }} <br>{{ date.day }}
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- <tr v-for="employee in selectedOrgs" :key="employee">
                      <td>
                        <b>{{ employee }}</b>
                      </td>
                       <td v-for="date in calculatedRange" :key="date">{{date.isHoliday}}</td> 
                    </tr> -->
                    
                  </tbody>
                </table>
              </a-card>
            </a-tab-pane>
            
            <a-tab-pane key="2" tab="My Direct Reporties">
              <!-- <a-card> My Direct Reporties 
                  <ul>
                      <li v-for="peers in mypeers" :key="peers">
                        {{ peers }}
                      </li>
                  </ul> 
              </a-card> -->
                 <a-card>
                <a-month-picker
                  :size="size"
                  @change="monthPickerChange"
                  placeholder="Month"
                  format="MMMM,YY" 
                />
                <a-divider dashed/>
            
                <table> 
                  <thead>
                    <tr>
                      <th />
                      <th v-for="date in calculatedRange" :key="{ date }">
                         {{ date.dayName }} <br>{{ date.day }}
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="employee in itemList" :key="employee">
                      <td>
                        <b>{{ employee }}</b>
                      </td>
                       <!-- <td v-for="date in calculatedRange" :key="date">{{date.isHoliday}}</td>  -->
                    </tr>
                    
                  </tbody>
                </table>
              </a-card>
            </a-tab-pane>
          </a-tabs>
        </a-col>
        <a-checkbox @change="onChange" value="absent"> Abesnties </a-checkbox>
      </a-row>
    </a-card>
  </div>
</template>

<script>
import VueHorizontalCalendar from "vue-horizontal-calendar";
import Datepicker from "vuejs-datepicker";
import moment from "moment";

const DAYS_IN_MONTH = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

const currentDate = moment();
const currentMonth = currentDate.format("MM");
const daysInMonth = DAYS_IN_MONTH[parseInt(currentMonth) - 1];

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
      itemList: ["Khubaib", "Israr", "Faizan","Nouman"],
      mypeers:["a", "b" , "c" , "d"],
      selectedOrgs: [],
      currentMonth: currentDate.format("MMMM/YY"),
      calculatedRange: calculateRange(daysInMonth, currentDate),
      size: 'large',
    };
  },
  components: {
    VueHorizontalCalendar,
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

</style>

