<div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

        <!-- Table With Filter -->
        <div x-data="{isFilterExpanded:false}">
          <div class="flex items-center justify-between">
            <h2
              class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
            >
            <button
              class="btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
            >
              Créer
            </button>
            </h2>
            <div class="flex">
              <div class="flex items-center" x-data="{isInputActive:false}">
                <label class="block">
                  <input
                    x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                    :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                    class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                    placeholder="Search here..."
                    type="text"
                  />
                </label>
                <button
                  @click="isInputActive = !isInputActive"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                  </svg>
                </button>
              </div>

              <button
                @click="isFilterExpanded = !isFilterExpanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="2"
                    d="M18 11.5H6M21 4H3m6 15h6"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div x-show="isFilterExpanded" x-collapse>
            <div class="max-w-2xl py-3">
              <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <label class="block">
                  <span>Nom commune:</span>
                  <div class="relative mt-1.5 flex">
                    <input
                    wire:model.live='emp_name'
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Employer Name"
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 transition-colors duration-200"
                        fill="none"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke="currentColor"
                          stroke-width="1.5"
                          d="M5 19.111c0-2.413 1.697-4.468 4.004-4.848l.208-.035a17.134 17.134 0 015.576 0l.208.035c2.307.38 4.004 2.435 4.004 4.848C19 20.154 18.181 21 17.172 21H6.828C5.818 21 5 20.154 5 19.111zM16.083 6.938c0 2.174-1.828 3.937-4.083 3.937S7.917 9.112 7.917 6.937C7.917 4.764 9.745 3 12 3s4.083 1.763 4.083 3.938z"
                        />
                      </svg>
                    </span>
                  </div>
                </label>
                <label class="block">
                  <span> District</span>
                  <div class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter Project Name"
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 transition-colors duration-200"
                        fill="none"
                        viewBox="0 0 24 24"
                      >
                        <path
                          stroke="currentColor"
                          stroke-width="1.5"
                          d="M3.082 13.944c-.529-.95-.793-1.425-.793-1.944 0-.519.264-.994.793-1.944L4.43 7.63l1.426-2.381c.559-.933.838-1.4 1.287-1.66.45-.259.993-.267 2.08-.285L12 3.26l2.775.044c1.088.018 1.631.026 2.08.286.45.26.73.726 1.288 1.659L19.57 7.63l1.35 2.426c.528.95.792 1.425.792 1.944 0 .519-.264.994-.793 1.944L19.57 16.37l-1.426 2.381c-.559.933-.838 1.4-1.287 1.66-.45.259-.993.267-2.08.285L12 20.74l-2.775-.044c-1.088-.018-1.631-.026-2.08-.286-.45-.26-.73-.726-1.288-1.659L4.43 16.37l-1.35-2.426z"
                        />
                        <circle
                          cx="12"
                          cy="12"
                          r="3"
                          stroke="currentColor"
                          stroke-width="1.5"
                        />
                      </svg>
                    </span>
                  </div>
                </label>
              </div>
              <div class="mt-4 space-x-1 text-right">
                <button
                  @click="isFilterExpanded = ! isFilterExpanded"
                  class="btn font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  Cancel
                </button>

                <button
                  @click="isFilterExpanded = ! isFilterExpanded"
                  class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                  Apply
                </button>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
              <table class="is-hoverable w-full text-left">
                <thead>
                  <tr>
                    <th
                      class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      #
                    </th>
                    <th
                      class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      Project Name
                    </th>
                    <th
                      class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      Employer Name
                    </th>

                    <th
                      class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      Progress
                    </th>
                    <th
                      class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      Status
                    </th>
                    <th
                      class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                    >
                      Deadline
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">1</td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                      Web Application
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      John Doe
                    </td>

                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        x-tooltip.primary="'42% Completed'"
                        class="progress h-2 bg-slate-150 dark:bg-navy-500"
                      >
                        <div
                          class="w-5/12 rounded-full bg-primary dark:bg-accent"
                        ></div>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        class="badge space-x-2.5 px-0 text-primary dark:text-accent-light"
                      >
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>In Progress</span>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      03 Sep
                    </td>
                  </tr>
                  <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                      Android App
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      Sabina Mores
                    </td>

                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        x-tooltip.primary="'77% Completed'"
                        class="progress h-2 bg-slate-150 dark:bg-navy-500"
                      >
                        <div
                          class="w-9/12 rounded-full bg-primary dark:bg-accent"
                        ></div>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        class="badge space-x-2.5 px-0 text-primary dark:text-accent-light"
                      >
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>In Progress</span>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      16 Sep
                    </td>
                  </tr>
                  <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">3</td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                      Android App
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      Bailie Coulman
                    </td>

                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        x-tooltip.error="'Cancelled'"
                        class="progress h-2 bg-slate-150 dark:bg-navy-500"
                      >
                        <div class="w-full rounded-full bg-error"></div>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div class="badge space-x-2.5 px-0 text-error">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Cancelled</span>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">N/A</td>
                  </tr>
                  <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">4</td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                      Desktop App
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      Richardo Aldren
                    </td>

                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        x-tooltip.success="'Completed'"
                        class="progress h-2 bg-slate-150 dark:bg-navy-500"
                      >
                        <div class="w-full rounded-full bg-success"></div>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div class="badge space-x-2.5 px-0 text-success">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Completed</span>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      25 Aug
                    </td>
                  </tr>
                  <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">5</td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                      CRM App
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      Nolan Doe
                    </td>

                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        x-tooltip.secondary="'Pending'"
                        class="progress h-2 bg-slate-150 dark:bg-navy-500"
                      >
                        <div class="w-1/12 rounded-full bg-secondary"></div>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div
                        class="badge space-x-2.5 px-0 text-secondary dark:text-secondary-light"
                      >
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Pending</span>
                      </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">3 Oct</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div
              class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
            >
              <div class="text-xs+">1 - 10 of 10 entries</div>
              <ol class="pagination space-x-1.5">
                <li>
                  <a
                    href="#"
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 19l-7-7 7-7"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >1</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    >2</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >3</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >4</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >5</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                      />
                    </svg>
                  </a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
</div>
