<template>
  <div class="time-sheet">
    <a-card>
      <a-card class="title">
        <h4>People Profile/Time Off</h4> 
        <h5>Time Off</h5>
      </a-card>
      <a-divider></a-divider>
      <a-row :gutter="24">
        <a-col :span="12">
          <a-row>
            <a-col :span="24" class="calendar">
              <a-range-picker :open="true" @change="onChange" />
            </a-col>
          </a-row>
          <a-row :gutter="[16, 16]">
            <a-col :span="3" class="today">
              <div class="box" />
              <span>Today</span>
            </a-col>
            <a-col :span="4" class="today">
              <div class="box green" />
              Approved
            </a-col>
            <a-col :span="6" class="today">
              <div class="box yellow" />
              Pending
            </a-col>
          </a-row>
          <a-row :gutter="16">
            <a-col :span="4" class="today black">
              <div class="box black" />
              Holiday
            </a-col>
            <a-col :span="7" class="today red">
              <div class="box red" />
              Cancellation Pending
            </a-col>
            <a-col :span="4" class="today">
              <div class="box blue" />
              Selected
            </a-col>
          </a-row>
        </a-col>
        <a-col :span="12">
          <h5>Balances</h5>
          <p>
            There is no favorite time type configured with the <br />
            associated time account for this user
          </p>
          <a href="#"> Show All </a>
          <h5 class="pt-4">Upcoming Time Off</h5>
          <a-table
            :columns="columns"
            :data-source="data"
            :pagination="false"
            :bordered="false"
            :stripped="false"
          />
          <div class="show pt-2">
            <a href="#"> Show All</a>
          </div>
          <div class="create-btn text-right">
            <a-button type="primary">
              <nuxt-link to="/create-absence"> Create Absence </nuxt-link>
            </a-button>
          </div>
        </a-col>
      </a-row>
    </a-card>
  </div>
</template>

<script>
const columns = [
  {
    title: "No Events",
    dataIndex: "no-events",
    key: "no-events",
    width: 180,
  },
  {
    title: "",
    dataIndex: "event",
    key: "event",
    width: 120,
  },
  {
    title: "",
    dataIndex: "holiday",
    key: "holiday",
    width: 250,
  },
  {
    title: "",
    dataIndex: "planedHours",
    key: "planedHours",
    width: 120,
  },
];

const data = [];
for (let i = 0; i < 5; i++) {
  data.push({
    key: i,
  });
}
export default {
  data() {
    return {
      data,
      columns,
    };
  },
  methods: {
    onChange(date, dateString) {
      console.log(date, dateString);
    },
  },
};
</script>

<style lang="scss">
.title
{
  background-color: rgb(204, 207, 207);
}
.calendar {
  min-height: 315px;
}
.ant-calendar-range .ant-calendar-input-wrap {
  display: none;
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
