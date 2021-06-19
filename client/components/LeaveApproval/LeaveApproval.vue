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
        
        <a-col :span="19">
          <a-tabs default-active-key="1" @change="callback">
            <a-tab-pane key="1" tab="My Peers">
              <a-card>
                <a-row>
                  <a-col :span="12">
                     <a-month-picker
                  :size="size"
                  @change="monthPickerChange"
                  placeholder="Month"
                  default="currentMonth"
                  format="MMMM,YY" 
                />
                  </a-col>
                  <a-col :span="12" align="end">
                    
                  <a-checkbox @change="onChange" value="absent" > Abesnties </a-checkbox> 
                  </a-col>
                </a-row>
               
                <a-divider dashed/>
               
            <VueHorizontalCalendar lang="en" :swipeSpace="14"/>
            <a-table :columns="columns" :data-source="data">
              <a slot="profile" slot-scope="text">
                 <a-avatar :size="35" icon="user" />
               {{text.profile}} </a>
               <span slot="week_23">
                  <a-row>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box"  :style="{borderRight: '2px groove #da15b9'}"></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_24">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_25">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_26">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_27">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
            </a-table>
                <!-- <table> 
                  <thead>
                    <tr>
                      <th />
                      <th v-for="date in calculatedRange" :key="{ date }">
                         {{ date.dayName }} <br>{{ date.day }}
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table> -->
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
                <a-row>
                  <a-col :span="12">
                     <a-month-picker
                  :size="size"
                  @change="monthPickerChange"
                  placeholder="Month"
                  default="currentMonth"
                  format="MMMM,YY" 
                />
                  </a-col>
                  <a-col :span="12" align="end">
                    
                  <a-checkbox @change="onChange" value="absent" > Abesnties </a-checkbox> 
                  </a-col>
                </a-row>
               
                <a-divider dashed/>
               
            <VueHorizontalCalendar lang="en" :swipeSpace="14"/>
            <a-table :columns="columns" :data-source="data">
              <a slot="profile" slot-scope="text">
                 <a-avatar :size="35" icon="user" />
               {{text.profile}} </a>
               <span slot="week_23">
                  <a-row>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box" ></p>
                    </a-col>
                    <a-col :span="4" class="calender-col" >
                     <p class="calender-box"  :style="{borderRight: '2px groove #da15b9'}"></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_24">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_25">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_26">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
               <span slot="week_27">
                  <a-row>
                    <a-col :span="4"  class="calender-col" v-for="(item,index) in 4" :key="index">
                     <p class="calender-box" ></p>
                    </a-col>
                  
                  </a-row>
                
               </span>
            </a-table>
                <!-- <table> 
                  <thead>
                    <tr>
                      <th />
                      <th v-for="date in calculatedRange" :key="{ date }">
                         {{ date.dayName }} <br>{{ date.day }}
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table> -->
              </a-card>
            </a-tab-pane>
          </a-tabs>
        </a-col>
      
      </a-row>
    </a-card>
  </div>
</template>

<script>
import VueHorizontalCalendar from "vue-horizontal-calendar";
import Datepicker from "vuejs-datepicker";
import moment from "moment";
const columns = [
  {
    dataIndex: '',
    key: 'profile',
    scopedSlots: { customRender: 'profile' },
  },
  {
    title: 'Week 23',
    dataIndex: 'week_23',
    key: 'week_23',
    scopedSlots: { customRender: 'week_23' },
  },
  {
    title: 'Week 24',
    dataIndex: 'week_24',
    key: 'week_24',
    scopedSlots: { customRender: 'week_24' },
  },
  {
    title: 'Week 25',
    key: 'week_25',
    dataIndex: 'week_25',
    scopedSlots: { customRender: 'week_25' },
  },
  {
    title: 'Week 26',
    key: 'week_26',
    dataIndex: 'week_26',
    scopedSlots: { customRender: 'week_26' },
  },
  {
    title: 'Week 27',
    key: 'week_27',
    dataIndex: 'week_27',
    scopedSlots: { customRender: 'week_27' },
  },
];

const data = [
  {
    key: '1',
    profile: 'Charles Brown',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
  {
    key: '2',
    profile: 'Chritsine Dolan',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
  {
    key: '3',
    profile: 'Lauren Robins',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
  {
    key: '4',
    profile: 'Jacob Curran',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
  {
    key: '5',
    profile: 'Jordan Robinson',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
  {
    key: '6',
    profile: 'Macrus Wright',
    week_23: '',
    week_24: '',
    week_25: '',
    week_26: '',
    week_27: '',
  },
];

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
       data,
      columns,
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
</style>

