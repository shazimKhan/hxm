<template>
  <div class="profile">
     <!-- <div class="row">
      <div class="col-6">
        <h3>Employee Profile</h3>
      </div>
    </div>  -->
    <template>
      <div class="info">
          <a-card class="info">
            <a-row class="py-4">
              <a-col :span="3">
                <!-- <a-avatar :size="100" icon="user" />  -->
                <a-avatar :size="160" style="backgroundColor:#93E5E6 " icon="user" />
              </a-col>

              <a-col :span="5">
                <h3>Khubaib Ahmad</h3>
                <h6>
                <br>
                (Admin)
                <br>
                Local Time: Tuesday, 06:04:03 
                <br>
                Bussiness Phone: <strong>+923485305011</strong>
                <br>
                khubaibahmadmughal@gmail.com
                </h6>
                <br>
                <h3> <a href="https://www.facebook.com"> <a-icon type="facebook"  /></a> <a href="https://www.linkedin.com/signup"> <a-icon type="linkedin" /></a></h3>
              </a-col>
            </a-row>
          </a-card>
        </div>
    </template> 

    <a-tabs default-active-key="0" @change="callback">
      <a-tab-pane key="1"> 
        <span slot="tab"><a href="#card1" v-scroll-to="'#card1'">ME</a> 
        </span>
      </a-tab-pane>
      <a-tab-pane key="2">
        <span slot="tab"><a href="#card2" v-scroll-to="'#card2'">EMPLOYMENT</a> 
        </span>
      </a-tab-pane>
      <a-tab-pane key="3">
        <span slot="tab"><a href="#card3" v-scroll-to="'#card3'">COMPENSATION</a> 
        </span>
      </a-tab-pane>
      <a-tab-pane key="4" >
        <span slot="tab"><a href="#card4" v-scroll-to="'#card4'">TIME</a> 
        </span>
      </a-tab-pane>
      <a-tab-pane key="5"> 
        <span slot="tab"><a href="#card5" v-scroll-to="'#card5'">BENEFITS</a> 
        </span>
      </a-tab-pane>
      <a-tab-pane key="6">
        <span slot="tab"><a href="#card6" v-scroll-to="'#card6'">SKILLS</a> 
        </span>
      </a-tab-pane>
    </a-tabs>
  <div>
    
    <a-card title="Personal Information" :bordered="true" id="card1" >
      <a-card>
      <a-row class="PI-card">
              <a-col :span="6">
              <h5>ME</h5>
              </a-col>
              <a-col :span="8">
                <strong>Effecticve as of :March 17,2017</strong>
                <p>First Name: Khubaib</p>
                <p>Last Name: Ahmad</p>
                <p>Display Name: ---</p>
                <p>Gender: ******</p>
                <p>Marital Status: Single</p>
                <br>
                <h5>Global Information</h5>
                <p>None</p>
              </a-col>
              <a-col :span="8">
                <h5>Address</h5>
                <br>
                <p>Home:   House#210, Street #1, British Home, Rwp</p>
                <br>
                <h5>Natinal ID Information</h5>
                <p>Pakistan</p>
                <p>Social Security: *****</p>
                <p>Number : <a href="">Show</a></p>
              </a-col>
              <a-col :span=8>
                <a-button shape=round size=large>Edit</a-button>
              </a-col>
      </a-row>
      </a-card>
    </a-card>
  
    <a-card title="Employment" :bordered="false" id="card2">
      <a-card>
      <a-row class="Emp-card">
              <a-col :span="6">
                <h5>Organization Information</h5>
              </a-col>
              
              <a-col :span="8">
                <h5>Position Information</h5>
                <p>Position : HR Administrator</p>
                <p>Entry Date: March 17,2017</p>
                <br>
                <h5>Organization Information</h5>
                <p>Company:    XYZ(1111)</p>
                <p>Bussiness Unit:     Corporate(COPR)</p>
                <p>Division:     Corporate Services(COPR_SVCS)</p>
              </a-col>
              <a-col :span="10">
                <p>Time In Position: 19 Years 3 Month 5 Days</p>
                <br><br><br><br><br>
                <p>Department	Global Human Resources (50007726) </p>
                <p>Location	Corporate - US-Philadelphia (1710-2001)</p>
                <p>Timezone	US/Eastern (GMT-04:00)</p>
              </a-col>
              
            </a-row>
            </a-card>
    </a-card>
  
    <a-card title="Compensation" :bordered="false" id="card3" >
      <a-card>
        <a-row class="Emp-card">
              <a-col :span="6">
                <h5>Current Pay</h5>
              </a-col>
              
              <a-col :span="8">
                <h5>Compensation Information</h5>
                <p> Effective as of: Jan 1, 2019</p>
                  
                  <p>  Annualized Salary (AnnualizedSalary): 89,160 USD</p>
                  <p>  Bonus Target:  -</p>
                  <p>  Pay Group: 	USA Semi-Monthly (US)</p>
                  <p>  Is Eligible For Benefit:  	No</p>
                  <p>  Current Salary:  ------</p>
              </a-col>
              <a-col :span="10">
                <h5>Recurring Deductions</h5>
                <br>
                <h6>One Time Deductions</h6>
                <p>No data</p>
                <a-button type="danger"> Add one-time deduction
        
                </a-button>
              </a-col>
              
            </a-row>
      </a-card>
    </a-card>
  
          <a-card title="Time Sheet" size="small" id="card4">
            <a-row class="time-card">
              <a-col :span="6">
                <h5>Time Off</h5>
              </a-col>
              <a-col :span="8">
                <h5>Upcomming Time Off</h5>
                <p>There are no upcoming absences</p>
                <nuxt-link to="/time-sheet">Go to Time Off</nuxt-link>
              </a-col>
              <a-col :span="10">
                <p>Time Off Balances</p>
                <p><strong> 0 days </strong> Vacation</p>
                <p><strong> 0 days </strong> Sickness</p>
                <p><strong> 00:00 hours </strong> Comp Time</p>
              </a-col>
            </a-row>
          </a-card>
  
    <a-card title="Benefits" :bordered="false" id="card5">
      <a-card>
        <a-row class="time-card">
              <a-col :span="6">
                <h5>Benefits Overview</h5>
              </a-col>
              <a-col :span="8">
                <h5>My Active Enrollments</h5>
                <p>Child Supplemental Life Insurance	0.87 USD (Monthly) Insurance</p>
                <p>Employee Supplemental Life Insurance	11.00 USD (Monthly) Insurance</p>
                <p>Life Insurance	50.00 USD (Monthly) Insurance</p>
                <nuxt-link to="#">Go to Benefits</nuxt-link>
              </a-col>
              <a-col :span="10">
                
              </a-col>
            </a-row>
      </a-card>
    </a-card>
      <a-card title="Skills" size="small" id="card6">
        <a-card>
            <a-row class="time-card">
              <a-col :span="6">
                <h5>Skill Profile</h5>
              </a-col>
              <a-col :span="5">
                <h5>Skills</h5>
                <br>
                <p>Collaboration </p>
                <p>Time and Task Manangement</p>
                <br><br>
                <a-button type="primary">Add Skill</a-button>
              </a-col>
              <a-col :span="7">
                <h5>Employee Self-Rating</h5>
                <br>
                <a-progress :percent="100" size="small" />
                <a-progress :percent="100" size="small" />
              </a-col>
              <a-col :span="5">
                <h5>Rating</h5>
                <br>
                <a-progress
      type="circle"
      :stroke-color="{
        '0%': '#108ee9',
        '100%': '#87d068',
      }"
      :percent="100"
    />
              </a-col>
            </a-row>
        </a-card>
      </a-card> 

  </div>

</div>
</template>

<script>
export default {
  
  methods: {
    callback(key) {
      console.log(key);
    },
  },
  
};

</script>
<style lang="scss">
.ant-tabs-bar {
  background: white;
}
.info
{
    background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.today {
  display: inline-flex;
  align-items: center;
  .box {
    width: 15px;
    height: 15px;
    border: 1px solid #eee;
    margin-right: 7px;
  }
  .green {
    background-color: green;
  }
  .red {
    background-color: red;
  }
  .blue {
    background-color: blue;
  }
  .yellow {
    background-color: yellow;
  }
}
</style>
