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

        <a-row class="pt-4">
          <h6>Holiday Assignments</h6>
          <a-col :span="5">
            <p><span class="text-danger">*</span> Date Of Holiday</p>
            <a-row>
              <a-col v-for="list in lists" :key="list" :span="24" class="py-2">
                <a-date-picker :default-value="moment('01/01/2018', dateFormat)" :format="dateFormat" />
              </a-col>
            </a-row>
          </a-col>
          <a-col :span="4">
            <p><span class="text-danger">*</span> Holiday Class</p>
            <a-row>
              <a-col v-for="item in items" :key="item" :span="24" class="py-2">
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
              </a-col>
            </a-row>
          </a-col>
          <a-col :span="9">
            <p><span class="text-danger">*</span> Holiday</p>
            <a-row>
              <a-col v-for="item in items" :key="item" :span="24" class="py-2">
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
                <a-icon type="project" />
              </a-col>
            </a-row>
          </a-col>
          <a-col :span="5">
            <a-row :gutter="24" class="mt-4 pt-4">
              <a-col :span="3">
                <div class="send-icon">
                  <a-icon type="delete" />
                </div>
              </a-col>
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="arrow-down" />
                </div>
              </a-col>
            </a-row>
            <a-row :gutter="24" class="py-3">
              <a-col :span="3">
                <div class="send-icon">
                  <a-icon type="delete" />
                </div>
              </a-col>
              <a-col :span="3">
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
            <a-row :gutter="24" class="py-2">
              <a-col :span="3">
                <div class="send-icon">
                  <a-icon type="delete" />
                </div>
              </a-col>
              <a-col :span="3">
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
            <a-row :gutter="24" class=" pt-3">
              <a-col :span="3">
                <div class="send-icon">
                  <a-icon type="delete" />
                </div>
              </a-col>
              <a-col :span="3" />
              <a-col :span="1">
                <div class="send-icon">
                  <a-icon type="arrow-up" />
                </div>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-row>
    <a-row />
  </div>
</template>
<script>
import moment from 'moment'
export default {
  data () {
    return {
      dateFormat: 'DD/MM/YYYY',
      monthFormat: 'MM/YYYY',
      dateFormatList: ['DD/MM/YYYY', 'DD/MM/YY'],
      lists: [1, 2, 3, 4],
      items: [1, 2, 3, 4]

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
