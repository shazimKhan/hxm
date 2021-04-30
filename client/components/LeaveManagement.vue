<template>
  <div>
    <a-row>
      <a-col :span="24" class="">
        <a-page-header
          style="border: 1px solid rgb(235, 237, 240)"
          :title="false"
        >
          <a-row>
            <a-col :span="1" class="pt-1">
              <span class="font-weight-bold">Search</span>
            </a-col>
            <a-col :span="3">
              <a-select
                default-value="work"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="search" />
                <a-select-option value="work">
                  Work Schedule
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="4" class="pl-4">
              <a-select
                default-value="8hr7to15"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="search" />
                <a-select-option value="8hr7to15">
                  8hr7to15 (8hr7to15)
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="3" class="pt-1 pl-4">
              <span class="font-weight-bold">Includes Inactive</span>
            </a-col>
            <a-col :span="2">
              <a-select
                default-value="no"
                style="width: 100%"
                @change="handleChange"
              >
                <a-icon slot="suffixIcon" type="search" />
                <a-select-option value="no">
                  No
                </a-select-option>
              </a-select>
            </a-col>
            <a-col :span="11" align="end" class="pt-1">
              <a-row>
                <a-col :span="16" class="pt-1 pr-3">
                  <span class="font-weight-bold">Create New</span>
                </a-col>
                <a-col :span="8">
                  <a-select
                    default-value="no"
                    style="width: 100%"
                    @change="handleChange"
                  >
                    <a-icon slot="suffixIcon" type="search" />
                    <a-select-option value="no">
                      No Selection
                    </a-select-option>
                  </a-select>
                </a-col>
              </a-row>
            </a-col>
          </a-row>

          <!-- <template slot="extra">
            <a-button key="3"> Operation </a-button>
            <a-button key="2"> Operation </a-button>
            <a-button key="1" type="primary"> Primary </a-button>
          </template> -->
        </a-page-header>
      </a-col>
    </a-row>
    <a-row>
      <a-card :title="'  Holiday Caldendar: Holcal (Holcal)'">
        <a-row>
          <a-col :span="16" :offset="7">
            <a-row :gutter="16">
              <a-col :span="4" class="text-right">
                <p><span class="text-danger">*</span> Name</p>
              </a-col>
              <a-col :span="5">
                <a-input placeholder="Holcal" />
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="weibo-circle" />
                </div>
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="question-circle" theme="filled" />
                </div>
              </a-col>
            </a-row>
            <a-row :gutter="16" class="my-2">
              <a-col :span="4" class="text-right">
                <p> Country</p>
              </a-col>
              <a-col :span="4">
                <a-select
                  default-value="work"
                  style="width: 100%"
                  @change="handleChange"
                >
                  <a-icon slot="suffixIcon" type="search" />
                  <a-select-option value="work">
                    No Selection
                  </a-select-option>
                </a-select>
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="plus-circle" theme="filled" />
                </div>
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="question-circle" theme="filled" />
                </div>
              </a-col>
            </a-row>
            <a-row :gutter="16">
              <a-col :span="4" class="text-right">
                <p><span class="text-danger">*</span> External Code</p>
              </a-col>
              <a-col :span="5">
                <a-input placeholder="Holcal" />
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="question-circle" theme="filled" />
                </div>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row>
          <a-col :span="24">
            <a-table :columns="columns" :data-source="data" :bordered="false" :stripped="false">
              <template slot="title">
                <h6>Holiday Assignments</h6>
              </template>
              <span slot="date">
                <a-date-picker :default-value="moment('01/01/2018', dateFormat)" :format="dateFormat" />
              </span>
              <span slot="full">
                <a-select
                  default-value="work"
                  style="width: 50%"
                  @change="handleChange"
                >
                  <a-icon slot="suffixIcon" type="search" />
                  <a-select-option value="work">
                    Full
                  </a-select-option>
                </a-select>
              </span>
              <span slot="holiday">
                <a-select
                  default-value="work"
                  style="width: 50%"
                  @change="handleChange"
                >
                  <a-icon slot="suffixIcon" type="search" />
                  <a-select-option value="work">
                    New Years Day (New_years )
                  </a-select-option>
                </a-select>
              </span>
              <span slot="icon">
                <a-row>
                  <a-col :span="3" class="mr-3">
                    <div class="send-icon">
                      <a-icon type="delete" />
                    </div>
                  </a-col>
                  <a-col :span="3" class="mr-2">
                    <div class="send-icon">
                      <a-icon type="arrow-down" />
                    </div>
                  </a-col>
                  <a-col :span="1">
                    <div class="send-icon">
                      <a-icon type="arrow-up" />
                    </div>
                  </a-col>
                </a-row>
              </span>
              <template slot="footer" class="bg-footer">
                <div class="save-btn text-right">
                  <a-button type="success">
                    cancel
                  </a-button>

                  <a-button type="primary">
                    Save
                  </a-button>
                </div>
              </template>
            </a-table>
          </a-col>
        </a-row>
      </a-card>
    </a-row>
    <a-row />
  </div>
</template>
<script>
import moment from 'moment'
const columns = [
  {
    title: 'Date Of Holiday',
    dataIndex: 'date_of_holiday',
    key: 'date_of_holiday',
    scopedSlots: { customRender: 'date' },
    width: 180

  },
  {
    title: 'Holiday Class',
    dataIndex: 'holiday_class',
    scopedSlots: { customRender: 'full' },
    key: 'holiday_class',
    width: 120

  },
  {
    title: 'Holiday',
    dataIndex: 'holiday',
    key: 'holiday',
    scopedSlots: { customRender: 'holiday' },
    width: 250

  },
  {
    title: '',
    dataIndex: 'planedHours',
    key: 'planedHours',
    scopedSlots: { customRender: 'icon' },
    width: 120

  }
]

const data = []
for (let i = 0; i < 5; i++) {
  data.push({
    key: i
  })
}
export default {
  data () {
    return {
      dateFormat: 'DD/MM/YYYY',
      monthFormat: 'MM/YYYY',
      dateFormatList: ['DD/MM/YYYY', 'DD/MM/YY'],
      lists: [1, 2, 3, 4],
      items: [1, 2, 3, 4],
      data,
      columns

    }
  },
  methods: {
    moment,
    handleChange (val) {
      console.log(val)
    }
  }
}
</script>
<style lang="scss">
.bg-footer {
  background-color: #ffffff !important;
  border: none;
}

tr:last-child td {
  padding-bottom: 10px;
}
.send-icon {
  i.anticon.anticon-weibo-circle {
    font-size: 20px;
  }
  i.anticon.anticon-question-circle {
        font-size: 20px;
            color: #eee;
  }
  i.anticon.anticon-plus-circle {
    font-size: 20px;
  }
  i.anticon.anticon-delete {
        font-size: 20px;

  }
}
  i.anticon.anticon-project {
            font-size: 20px;

  }

</style>
