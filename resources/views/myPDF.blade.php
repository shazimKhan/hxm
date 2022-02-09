<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
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
              </a-col>
              <a-col :span="7">
                <h5>Employee Self-Rating</h5>
                <br>
                <a-progress :percent="100" size="small" />
                <a-progress :percent="100" size="small" />
              </a-col>
            </a-row>
        </a-card>
      </a-card> 
</body>
</html>