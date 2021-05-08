<template>
  <div>
    <a-row>
      <a-col :span="24">
        <a-card :title="'Work Schedule: 8hr7to15 (8hr7to15)'">
          <!-- CARD SLOT -->
          <template slot="extra">
            <a-dropdown>
              <a class="ant-dropdown-link" @click="(e) => e.preventDefault()">
                Take Action <a-icon type="down" />
              </a>
              <a-menu slot="overlay">
                <a-menu-item>
                  <a href="javascript:;">Edit</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:;">Action 2</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:;">Action 3</a>
                </a-menu-item>
              </a-menu>
            </a-dropdown>
          </template>
          <a-row>
            <a-col :span="16" :offset="8">
              <a-timeline>
                <a-timeline-item>
                  <span class="text-danger pr-1">*</span>External Name
                  <span class="font-weight-bold pl-2">8hr7to15</span><a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item class="pl-2">
                  Search Field
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  <span class="text-danger pr-1">*</span> Is Individual Work
                  Schedule
                  <span class="font-weight-bold pl-2">No</span>
                </a-timeline-item>
                <a-timeline-item>
                  <span class="text-danger pr-1">*</span> Model
                  <span class="font-weight-bold pl-2">Simple</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Hours Per Day
                  <span class="font-weight-bold pl-2">8</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Hours Per Week
                  <span class="font-weight-bold pl-2">40</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Hours Per Month
                  <span class="font-weight-bold pl-2">174</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Hours Per Month
                  <span class="font-weight-bold pl-2">2,080</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Hours Per Year
                  <span class="font-weight-bold pl-2">2,080</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Average Working Days Per Week
                  <span class="font-weight-bold pl-2">2,080</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
                <a-timeline-item>
                  Flexible Requesting Allowed
                  <span class="font-weight-bold pl-2">No</span>
                  <a-icon type="question-circle" class="pl-4 text-dark" />
                </a-timeline-item>
              </a-timeline>
            </a-col>
          </a-row>
          <!-- TABLE SECTION  -->
          <a-row>
            <a-col :span="24">
              <a-table
                :columns="columns"
                :data-source="data"
                :bordered="false"
                :stripped="false"
              >
                <template slot="title">
                  <h4>Work Schedule Days</h4>
                </template>
              </a-table>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
  </div>
</template>

<script>
const columns = [
  {
    title: 'Day',
    dataIndex: 'day',
    key: 'day'
  },
  {
    title: 'Planned Hours And Minutes (hh:mm)',
    dataIndex: 'hours',
    key: 'hours'
  },
  {
    title: 'Planned Hours (Decimal)',
    dataIndex: 'planedHours',
    key: 'planedHours'
  }
]

const data = []
for (let i = 0; i < 5; i++) {
  data.push({
    key: i,
    day: i + 1,
    hours: '08:00',
    planedHours: '8'
  })
}
export default {
  data () {
    return {
      data,
      columns
    }
  },
  methods: {
    handleChange (val) {
      console.log(val)
    }
  }
}
</script>
<style>
.ant-timeline-item-tail {
  display: none;
}
.ant-timeline-item-head-blue {
  display: none;
}
tr:last-child td {
  padding-bottom: 0;
}
.ant-page-header-content {
  padding-top: 0px;
}
.ant-page-header {
  box-shadow: 3px 2px 3px;
}
</style>
