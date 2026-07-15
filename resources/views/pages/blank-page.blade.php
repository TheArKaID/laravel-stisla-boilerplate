@extends('layouts.app')

@section('title', 'Dashboard')

@section('main')
<header class="page__header mb-6">
  <h1 class="page__title text-2xl font-bold text-neutral-900 dark:text-neutral-100">Welcome back, <span>Steven</span> 👋</h1>
</header>
<div class="page__body space-y-6">
  <!-- Stats Section -->
  <section class="page__section">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 xl:col-span-4">
        <div class="card card--stat bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm">
          <div class="card__body">
            <div class="card__title text-xs font-bold text-neutral-400 dark:text-neutral-500 uppercase tracking-wider mb-4">Order Statistics</div>

            <div class="stat flex items-baseline gap-2 mb-2">
              <div class="stat__value text-3xl font-bold text-neutral-900 dark:text-neutral-100">59</div>
              <div class="stat__meta flex items-center gap-1.5 ml-2">
                <span class="stat__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold">Total Orders · This Month</span>
                <span class="badge badge--soft badge--success flex items-center gap-0.5 px-1.5 py-0.5 rounded text-xs bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="m19 15-7-6-7 6"/></svg>
                  11%
                </span>
              </div>
            </div>

            <div class="meter meter--block meter--lg meter--stat h-2 bg-neutral-100 dark:bg-neutral-800 rounded-full overflow-hidden flex mb-4">
              <span class="meter__bar meter__bar--warning bg-amber-500 h-full" style="width: 41%"></span>
              <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: 20%"></span>
              <span class="meter__bar meter__bar--success bg-emerald-500 h-full" style="width: 39%"></span>
            </div>

            <div class="stat-detail grid grid-cols-3 gap-4 pt-2 border-t border-neutral-100 dark:border-neutral-800">
              <div class="stat-detail__col flex flex-col">
                <span class="stat-detail__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold flex items-center gap-1.5 mb-1">
                  <span class="indicator indicator--warning w-2 h-2 rounded-full bg-amber-500"></span>
                  Pending
                </span>
                <span class="stat-detail__value text-lg font-bold text-neutral-900 dark:text-neutral-100">24</span>
                <span class="stat-detail__pct text-xs text-neutral-400">41%</span>
              </div>

              <div class="stat-detail__col flex flex-col">
                <span class="stat-detail__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold flex items-center gap-1.5 mb-1">
                  <span class="indicator indicator--primary w-2 h-2 rounded-full bg-primary"></span>
                  Shipping
                </span>
                <span class="stat-detail__value text-lg font-bold text-neutral-900 dark:text-neutral-100">12</span>
                <span class="stat-detail__pct text-xs text-neutral-400">20%</span>
              </div>

              <div class="stat-detail__col flex flex-col">
                <span class="stat-detail__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold flex items-center gap-1.5 mb-1">
                  <span class="indicator indicator--success w-2 h-2 rounded-full bg-emerald-500"></span>
                  Completed
                </span>
                <span class="stat-detail__value text-lg font-bold text-neutral-900 dark:text-neutral-100">23</span>
                <span class="stat-detail__pct text-xs text-neutral-400">39%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 xl:col-span-4">
        <div class="card card--stat bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
          <div class="card__body">
            <div class="flex justify-between items-center mb-4">
              <span class="icon-box icon-box--primary icon-box--lg w-10 h-10 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                  <circle cx="12" cy="12" r="10" />
                  <path stroke-linecap="round" d="M12 17v1m0-12v1m3 2.5C15 8.12 13.657 7 12 7S9 8.12 9 9.5s1.343 2.5 3 2.5s3 1.12 3 2.5s-1.343 2.5-3 2.5s-3-1.12-3-2.5" />
                </svg>
              </span>
              <span class="badge badge--soft badge--success flex items-center gap-0.5 px-1.5 py-0.5 rounded text-xs bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="m19 15-7-6-7 6"/></svg>
                8.2%
              </span>
            </div>
            <div class="stat mb-4">
              <div class="stat__value text-3xl font-bold text-neutral-900 dark:text-neutral-100"><span class="stat__unit text-lg font-medium mr-0.5">$</span>187,130</div>
              <div class="stat__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold mt-1">Available Balance</div>
            </div>
            <div id="sparkBalance" class="sparkline sparkline--hero"></div>
          </div>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 xl:col-span-4">
        <div class="card card--stat bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
          <div class="card__body">
            <div class="flex justify-between items-center mb-4">
              <span class="icon-box icon-box--success icon-box--lg w-10 h-10 rounded-lg bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="w-5 h-5">
                  <path stroke="currentColor" stroke-width="1.5" d="M3.794 12.03C4.331 9.342 4.6 8 5.487 7.134a4 4 0 0 1 .53-.434C7.04 6 8.41 6 11.15 6h1.703c2.739 0 4.108 0 5.13.7q.285.196.53.435C19.4 8 19.67 9.343 20.207 12.03c.771 3.856 1.157 5.784.269 7.15q-.241.373-.56.683C18.75 21 16.785 21 12.853 21H11.15c-3.933 0-5.899 0-7.065-1.138a4 4 0 0 1-.559-.683c-.888-1.366-.502-3.294.27-7.15Z" />
                  <circle cx="15" cy="9" r="1" fill="currentColor" />
                  <circle cx="9" cy="9" r="1" fill="currentColor" />
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M9 6V5a3 3 0 1 1 6 0v1" />
                </svg>
              </span>
              <span class="badge badge--soft badge--success flex items-center gap-0.5 px-1.5 py-0.5 rounded text-xs bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="m19 15-7-6-7 6"/></svg>
                23%
              </span>
            </div>
            <div class="stat mb-4">
              <div class="stat__value text-3xl font-bold text-neutral-900 dark:text-neutral-100">4,732</div>
              <div class="stat__label text-[10px] text-neutral-400 uppercase tracking-wider font-semibold mt-1">Units Sold · MTD</div>
            </div>
            <div id="sparkSales" class="sparkline sparkline--hero"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Charts & Customers Section -->
  <section class="page__section">
    <div class="grid grid-cols-12 gap-4 items-start">
      <div class="col-span-12 xl:col-span-8">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm">
          <div class="card__header flex justify-between items-center mb-6">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Sales Performance</span>
            <div class="chart-legend flex items-center gap-4 text-xs font-semibold">
              <span class="chart-legend__item flex items-center gap-1.5">
                <span class="indicator indicator--primary w-2 h-2 rounded-full bg-primary"></span>
                Sales
              </span>
              <span class="chart-legend__item flex items-center gap-1.5">
                <span class="indicator indicator--danger w-2 h-2 rounded-full bg-red-500"></span>
                Budget
              </span>
            </div>
          </div>
          <div class="card__body">
            <div class="chart-scroll overflow-x-auto">
              <div id="salesChart" class="chart min-w-[500px]"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-12 xl:col-span-4">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm">
          <div class="card__header mb-4">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Top Customers</span>
          </div>

          <div class="media-list divide-y divide-neutral-100 dark:divide-neutral-800">
            <div class="media media--seamless flex items-center justify-between py-3">
              <div class="flex items-center gap-3">
                <span class="avatar w-8 h-8 rounded-full flex items-center justify-center shrink-0 bg-primary/10 text-primary">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <circle cx="9" cy="12" r="6" opacity=".55" />
                    <circle cx="15" cy="12" r="6" opacity=".55" />
                  </svg>
                </span>
                <div class="media__content">
                  <div class="media__title font-semibold text-xs text-neutral-900 dark:text-neutral-100">Acme Corp</div>
                  <div class="media__meta text-[10px] text-neutral-400">18 orders</div>
                </div>
              </div>
              <div class="text-end">
                <div class="font-semibold text-xs text-neutral-950 dark:text-neutral-50">$24,910</div>
                <span class="badge badge--soft badge--success inline-flex items-center gap-0.5 px-1 py-0.5 rounded text-[10px] bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-3 h-3"><path d="m19 15-7-6-7 6"/></svg>
                  12%
                </span>
              </div>
            </div>

            <div class="media media--seamless flex items-center justify-between py-3">
              <div class="flex items-center gap-3">
                <span class="avatar w-8 h-8 rounded-full flex items-center justify-center shrink-0 bg-sky-50 dark:bg-sky-950/20 text-sky-600 dark:text-sky-400">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 9l8 5 8-5" /><path d="M4 14l8 5 8-5" />
                  </svg>
                </span>
                <div class="media__content">
                  <div class="media__title font-semibold text-xs text-neutral-900 dark:text-neutral-100">Riverway Ltd</div>
                  <div class="media__meta text-[10px] text-neutral-400">11 orders</div>
                </div>
              </div>
              <div class="text-end">
                <div class="font-semibold text-xs text-neutral-950 dark:text-neutral-50">$18,200</div>
                <span class="badge badge--soft badge--success inline-flex items-center gap-0.5 px-1 py-0.5 rounded text-[10px] bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-3 h-3"><path d="m19 15-7-6-7 6"/></svg>
                  6%
                </span>
              </div>
            </div>

            <div class="media media--seamless flex items-center justify-between py-3">
              <div class="flex items-center gap-3">
                <span class="avatar w-8 h-8 rounded-full flex items-center justify-center shrink-0 bg-amber-50 dark:bg-amber-950/20 text-amber-600 dark:text-amber-400">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2l2.3 7.4L22 12l-7.7 2.6L12 22l-2.3-7.4L2 12l7.7-2.6z" />
                  </svg>
                </span>
                <div class="media__content">
                  <div class="media__title font-semibold text-xs text-neutral-900 dark:text-neutral-100">Northwind Traders</div>
                  <div class="media__meta text-[10px] text-neutral-400">9 orders</div>
                </div>
              </div>
              <div class="text-end">
                <div class="font-semibold text-xs text-neutral-950 dark:text-neutral-50">$12,540</div>
                <span class="badge badge--soft badge--danger inline-flex items-center gap-0.5 px-1 py-0.5 rounded text-[10px] bg-rose-50 dark:bg-rose-950/20 text-rose-600 dark:text-rose-400 font-semibold mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-3 h-3"><path d="m19 9-7 6-7-6"/></svg>
                  3%
                </span>
              </div>
            </div>
          </div>
          <div class="card__footer pt-4 border-t border-neutral-100 dark:border-neutral-800">
            <a href="#" class="button button--lg button--neutral button--block w-full justify-center py-2 flex items-center text-xs font-semibold bg-neutral-50 dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 text-neutral-700 dark:text-neutral-300 transition-colors border border-neutral-200 dark:border-neutral-800 rounded-lg">View All</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Funnel, Fulfillment, Heatmap, Timeline Section -->
  <section class="page__section">
    <div class="grid grid-cols-12 gap-4">
      <!-- Conversion Funnel -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-3">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm h-full">
          <div class="card__header mb-4">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Conversion Funnel</span>
          </div>
          <div class="card__body space-y-4 flex flex-col">
            <div class="meter flex flex-col">
              <div class="flex justify-between items-center text-xs mb-1">
                <span class="meter__label text-neutral-400">Sessions</span>
                <span class="meter__value text-neutral-900 dark:text-neutral-100 font-medium">18,420</span>
              </div>
              <div class="meter__track h-1.5 bg-neutral-100 dark:bg-neutral-800 rounded-full overflow-hidden flex">
                <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: 100%"></span>
              </div>
            </div>

            <div class="meter flex flex-col">
              <div class="flex justify-between items-center text-xs mb-1">
                <span class="meter__label text-neutral-400">Product Views</span>
                <span class="meter__value text-neutral-900 dark:text-neutral-100 font-medium">12,100 <span class="text-[10px] text-neutral-400 font-normal">-34%</span></span>
              </div>
              <div class="meter__track h-1.5 bg-neutral-100 dark:bg-neutral-800 rounded-full overflow-hidden flex">
                <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: 66%"></span>
              </div>
            </div>

            <div class="meter flex flex-col">
              <div class="flex justify-between items-center text-xs mb-1">
                <span class="meter__label text-neutral-400">Add to Cart</span>
                <span class="meter__value text-neutral-900 dark:text-neutral-100 font-medium">7,250 <span class="text-[10px] text-neutral-400 font-normal">-40%</span></span>
              </div>
              <div class="meter__track h-1.5 bg-neutral-100 dark:bg-neutral-800 rounded-full overflow-hidden flex">
                <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: 39%"></span>
              </div>
            </div>

            <div class="meter flex flex-col">
              <div class="flex justify-between items-center text-xs mb-1">
                <span class="meter__label text-neutral-400">Purchased</span>
                <span class="meter__value text-neutral-900 dark:text-neutral-100 font-medium">2,140 <span class="text-[10px] text-neutral-400 font-normal">-26%</span></span>
              </div>
              <div class="meter__track h-1.5 bg-neutral-100 dark:bg-neutral-800 rounded-full overflow-hidden flex">
                <span class="meter__bar meter__bar--primary bg-primary h-full" style="width: 12%"></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fulfillment -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-3">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm h-full">
          <div class="card__header mb-2">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Fulfillment</span>
          </div>
          <div class="card__body flex flex-col">
            <div id="fulfillmentChart" class="chart h-40"></div>
            <div class="stat-detail grid grid-cols-2 gap-4 mt-auto pt-4 border-t border-neutral-100 dark:border-neutral-800">
              <div class="stat-detail__col flex flex-col items-center">
                <div class="stat-detail__label text-[9px] text-neutral-400 uppercase tracking-wider font-semibold">Avg ship</div>
                <div class="stat-detail__value text-base font-bold text-neutral-900 dark:text-neutral-100 mt-0.5">1.2d</div>
              </div>
              <div class="stat-detail__col flex flex-col items-center">
                <div class="stat-detail__label text-[9px] text-neutral-400 uppercase tracking-wider font-semibold">Returns</div>
                <div class="stat-detail__value text-base font-bold text-neutral-900 dark:text-neutral-100 mt-0.5">0.4%</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Heatmap -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-3">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm h-full">
          <div class="card__header mb-2">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Order Heatmap</span>
          </div>
          <div class="card__body flex flex-col">
            <div class="flex items-center text-xs mb-2">
              <span class="text-sm font-light text-neutral-900 dark:text-neutral-100">Fri · 6PM</span>
              <span class="text-[10px] text-neutral-400 ms-2">Peak window</span>
            </div>
            <div id="heatmapChart" class="chart h-32"></div>
            <div class="heatmap-legend flex items-center justify-between text-[10px] text-neutral-400 mt-auto pt-2">
              <span class="heatmap-legend__caption">Less</span>
              <div class="flex gap-0.5">
                <span class="heatmap-legend__swatch w-3 h-3 rounded bg-primary/15"></span>
                <span class="heatmap-legend__swatch w-3 h-3 rounded bg-primary/40"></span>
                <span class="heatmap-legend__swatch w-3 h-3 rounded bg-primary/65"></span>
                <span class="heatmap-legend__swatch w-3 h-3 rounded bg-primary/85"></span>
                <span class="heatmap-legend__swatch w-3 h-3 rounded bg-primary"></span>
              </div>
              <span class="heatmap-legend__caption">More</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Activity -->
      <div class="col-span-12 sm:col-span-6 xl:col-span-3">
        <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm h-full">
          <div class="card__header mb-4">
            <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Recent Activity</span>
          </div>
          <div class="card__body">
            <ol class="timeline space-y-4 border-l border-neutral-100 dark:border-neutral-800 pl-4 relative">
              <li class="timeline__item relative">
                <span class="timeline__marker timeline__marker--success absolute -left-6 top-1 w-2.5 h-2.5 rounded-full bg-emerald-500 border border-white dark:border-neutral-900"></span>
                <div class="timeline__body">
                  <div class="timeline__title text-xs text-neutral-800 dark:text-neutral-200 font-medium">
                    New order <a href="#" class="text-primary hover:underline font-semibold">#QC-7841</a> from Acme Corp
                  </div>
                  <div class="timeline__time text-[10px] text-neutral-400 mt-0.5">2 min ago</div>
                </div>
              </li>

              <li class="timeline__item relative">
                <span class="timeline__marker timeline__marker--primary absolute -left-6 top-1 w-2.5 h-2.5 rounded-full bg-primary border border-white dark:border-neutral-900"></span>
                <div class="timeline__body">
                  <div class="timeline__title text-xs text-neutral-800 dark:text-neutral-200 font-medium">
                    Payment captured · <a href="#" class="text-primary hover:underline font-semibold">$2,410</a>
                  </div>
                  <div class="timeline__time text-[10px] text-neutral-400 mt-0.5">9 min ago</div>
                </div>
              </li>

              <li class="timeline__item relative">
                <span class="timeline__marker timeline__marker--warning absolute -left-6 top-1 w-2.5 h-2.5 rounded-full bg-amber-500 border border-white dark:border-neutral-900"></span>
                <div class="timeline__body">
                  <div class="timeline__title text-xs text-neutral-800 dark:text-neutral-200">
                    Low stock alert · Ion Membrane Pack
                  </div>
                  <div class="timeline__time text-[10px] text-neutral-400 mt-0.5">22 min ago</div>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Orders Table Section -->
  <section class="page__section">
    <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-sm overflow-hidden">
      <div class="card__header flex justify-between items-center p-6 border-b border-neutral-100 dark:border-neutral-800">
        <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Recent Orders</span>
        <a href="#" class="button button--neutral button--ghost button--sm text-xs font-semibold hover:text-primary transition-colors">View all</a>
      </div>

      <div class="table-responsive overflow-x-auto w-full">
        <table class="table table--hover table--align-middle w-full text-left border-collapse">
          <thead class="table__head--alt bg-neutral-50 dark:bg-neutral-800/40 text-neutral-400 text-[10px] font-bold uppercase tracking-wider border-b border-neutral-100 dark:border-neutral-800">
            <tr>
              <th scope="col" class="py-3 px-6">Order</th>
              <th scope="col" class="py-3 px-6">Customer</th>
              <th scope="col" class="py-3 px-6">Date</th>
              <th scope="col" class="py-3 px-6 text-end">Items</th>
              <th scope="col" class="py-3 px-6">Status</th>
              <th scope="col" class="py-3 px-6 text-end">Total</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-neutral-100 dark:divide-neutral-800 text-xs">
            <tr class="hover:bg-neutral-50/50 dark:hover:bg-neutral-800/20 transition-colors">
              <th scope="row" class="py-4 px-6 font-semibold">
                <a href="#" class="text-primary hover:underline"><code>#10428</code></a>
              </th>
              <td class="py-4 px-6">
                <div class="flex items-center gap-3">
                  <span class="avatar avatar--sm avatar--circle w-7 h-7 rounded-full overflow-hidden shrink-0" data-stisla-avatar>
                    <img class="avatar__image object-cover w-full h-full" src="https://i.pravatar.cc/64?img=12" alt="" />
                  </span>
                  <div>
                    <div class="font-medium text-neutral-900 dark:text-neutral-100">Acme Corp</div>
                    <div class="text-[10px] text-neutral-400 mt-0.5">billing@acme.co</div>
                  </div>
                </div>
              </td>
              <td class="py-4 px-6 text-neutral-500">Jun 18</td>
              <td class="py-4 px-6 text-end text-neutral-500">6</td>
              <td class="py-4 px-6">
                <span class="badge badge--soft badge--warning inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] bg-amber-50 dark:bg-amber-950/20 text-amber-600 dark:text-amber-400 font-semibold border border-amber-200/20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-3.5 h-3.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l2.5 2.5"/></svg>
                  Pending
                </span>
              </td>
              <td class="py-4 px-6 text-end font-semibold text-neutral-900 dark:text-neutral-100">$1,490.00</td>
            </tr>

            <tr class="hover:bg-neutral-50/50 dark:hover:bg-neutral-800/20 transition-colors">
              <th scope="row" class="py-4 px-6 font-semibold">
                <a href="#" class="text-primary hover:underline"><code>#10427</code></a>
              </th>
              <td class="py-4 px-6">
                <div class="flex items-center gap-3">
                  <span class="avatar avatar--sm avatar--circle w-7 h-7 rounded-full overflow-hidden shrink-0" data-stisla-avatar>
                    <img class="avatar__image object-cover w-full h-full" src="https://i.pravatar.cc/64?img=32" alt="" />
                  </span>
                  <div>
                    <div class="font-medium text-neutral-900 dark:text-neutral-100">Riverway Ltd</div>
                    <div class="text-[10px] text-neutral-400 mt-0.5">ap@riverway.io</div>
                  </div>
                </div>
              </td>
              <td class="py-4 px-6 text-neutral-500">Jun 17</td>
              <td class="py-4 px-6 text-end text-neutral-500">2</td>
              <td class="py-4 px-6">
                <span class="badge badge--soft badge--info inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] bg-sky-50 dark:bg-sky-950/20 text-sky-600 dark:text-sky-400 font-semibold border border-sky-200/20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="w-3.5 h-3.5">
                    <path fill="currentColor" d="M7.506 15.265a.75.75 0 0 0 1.446-.4zm-1.43-7.99l.724-.2zM4.705 5.92l-.2.723zM3.2 4.725a.75.75 0 1 0-.402 1.445zm16.988 11a.75.75 0 1 0-.378-1.451zm-9.991 1.834c.31 1.12-.37 2.303-1.574 2.616L9 21.626c1.977-.513 3.185-2.502 2.643-4.467zm-1.574 2.616c-1.212.315-2.428-.389-2.74-1.519l-1.446.4c.54 1.955 2.594 3.082 4.563 2.57zm-2.74-1.519c-.31-1.12.37-2.303 1.574-2.616l-.377-1.45c-1.977.513-3.186 2.502-2.643 4.467zm1.574-2.616c1.212-.315 2.428.389 2.74 1.519l1.446-.4c-.54-1.955-2.594-3.082-4.563-2.57zm1.494-1.175L6.8 7.075l-1.446.4l2.152 7.79zM4.904 5.197l-1.703-.472l-.402 1.445l1.704.473zM6.8 7.075a2.71 2.71 0 0 0-1.896-1.878l-.4 1.446c.425.118.742.44.85.831zm4.31 11.01l9.079-2.36l-.378-1.451l-9.079 2.36z"/>
                    <path stroke="currentColor" stroke-width="1.5" d="M9.565 8.73c-.485-1.755-.727-2.633-.315-3.324c.411-.692 1.316-.927 3.126-1.398l1.92-.498c1.81-.47 2.715-.706 3.428-.307c.713.4.956 1.277 1.44 3.033l.515 1.862c.485 1.755.728 2.633.316 3.325c-.412.691-1.317.927-3.127 1.397l-1.92.499c-1.81.47-2.715.705-3.428.306c-.713-.4-.955-1.277-1.44-3.032z"/>
                  </svg>
                  Shipped
                </span>
              </td>
              <td class="py-4 px-6 text-end font-semibold text-neutral-900 dark:text-neutral-100">$580.00</td>
            </tr>

            <tr class="hover:bg-neutral-50/50 dark:hover:bg-neutral-800/20 transition-colors">
              <th scope="row" class="py-4 px-6 font-semibold">
                <a href="#" class="text-primary hover:underline"><code>#10426</code></a>
              </th>
              <td class="py-4 px-6">
                <div class="flex items-center gap-3">
                  <span class="avatar avatar--sm avatar--circle w-7 h-7 rounded-full overflow-hidden shrink-0" data-stisla-avatar>
                    <img class="avatar__image object-cover w-full h-full" src="https://i.pravatar.cc/64?img=48" alt="" />
                  </span>
                  <div>
                    <div class="font-medium text-neutral-900 dark:text-neutral-100">Northwind Traders</div>
                    <div class="text-[10px] text-neutral-400 mt-0.5">orders@northwind.com</div>
                  </div>
                </div>
              </td>
              <td class="py-4 px-6 text-neutral-500">Jun 17</td>
              <td class="py-4 px-6 text-end text-neutral-500">18</td>
              <td class="py-4 px-6">
                <span class="badge badge--soft badge--success inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] bg-emerald-50 dark:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 font-semibold border border-emerald-200/20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-3.5 h-3.5"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="m8.5 12.5 2 2 5-5"/></svg>
                  Completed
                </span>
              </td>
              <td class="py-4 px-6 text-end font-semibold text-neutral-900 dark:text-neutral-100">$8,200.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
    <!-- JS -->
@endpush
