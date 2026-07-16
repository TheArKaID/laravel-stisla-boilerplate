<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="page content">
  <div class="content__container">
    <header class="page__header">
      <h1 class="page__title">Welcome back, <span>Steven</span> 👋</h1>
    </header>
    <div class="page__body">
      <section class="page__section">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 xl:col-span-4">
            <div class="card card--stat">
              <div class="card__body">
                <div class="card__title">Order Statistics</div>

                <div class="stat">
                  <div class="stat__value">59</div>
                  <div class="stat__meta">
                    <span class="stat__label text-eyebrow">Total Orders · This Month</span>
                    <span class="badge badge--soft badge--success"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="m19 15l-7-6l-7 6"
                        />
                      </svg>
                      11%</span
                    >
                  </div>
                </div>

                <div class="meter meter--block meter--lg meter--stat">
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--warning" style="width: 41%"></span>
                    <span class="meter__bar meter__bar--primary" style="width: 20%"></span>
                    <span class="meter__bar meter__bar--success" style="width: 39%"></span>
                  </div>
                </div>

                <div class="stat-detail">
                  <div class="stat-detail__col">
                    <span class="stat-detail__label text-eyebrow">
                      <span class="indicator indicator--warning"></span>
                      Pending
                    </span>
                    <span class="stat-detail__value">24</span>
                    <span class="stat-detail__pct">41%</span>
                  </div>

                  <div class="stat-detail__col">
                    <span class="stat-detail__label text-eyebrow">
                      <span class="indicator indicator--primary"></span>
                      Shipping
                    </span>
                    <span class="stat-detail__value">12</span>
                    <span class="stat-detail__pct">20%</span>
                  </div>

                  <div class="stat-detail__col">
                    <span class="stat-detail__label text-eyebrow">
                      <span class="indicator indicator--success"></span>
                      Completed
                    </span>
                    <span class="stat-detail__value">23</span>
                    <span class="stat-detail__pct">39%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-6 xl:col-span-4">
            <div class="card card--stat">
              <div class="card__body">
                <div class="flex justify-between items-center">
                  <span class="icon-box icon-box--primary icon-box--lg"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10" />
                        <path
                          stroke-linecap="round"
                          d="M12 17v1m0-12v1m3 2.5C15 8.12 13.657 7 12 7S9 8.12 9 9.5s1.343 2.5 3 2.5s3 1.12 3 2.5s-1.343 2.5-3 2.5s-3-1.12-3-2.5"
                        />
                      </g></svg
                  ></span>
                  <span class="badge badge--soft badge--success"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="m19 15l-7-6l-7 6"
                      />
                    </svg>
                    8.2%</span
                  >
                </div>
                <div class="stat">
                  <div class="stat__value"><span class="stat__unit">$</span>187,130</div>
                  <div class="stat__label text-eyebrow">Available Balance</div>
                </div>
                <div id="sparkBalance" class="sparkline sparkline--hero"></div>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-6 xl:col-span-4">
            <div class="card card--stat">
              <div class="card__body">
                <div class="flex justify-between items-center">
                  <span class="icon-box icon-box--success icon-box--lg"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <g fill="none">
                        <path
                          stroke="currentColor"
                          stroke-width="1.5"
                          d="M3.794 12.03C4.331 9.342 4.6 8 5.487 7.134a4 4 0 0 1 .53-.434C7.04 6 8.41 6 11.15 6h1.703c2.739 0 4.108 0 5.13.7q.285.196.53.435C19.4 8 19.67 9.343 20.207 12.03c.771 3.856 1.157 5.784.269 7.15q-.241.373-.56.683C18.75 21 16.785 21 12.853 21H11.15c-3.933 0-5.899 0-7.065-1.138a4 4 0 0 1-.559-.683c-.888-1.366-.502-3.294.27-7.15Z"
                        />
                        <circle cx="15" cy="9" r="1" fill="currentColor" />
                        <circle cx="9" cy="9" r="1" fill="currentColor" />
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-width="1.5"
                          d="M9 6V5a3 3 0 1 1 6 0v1"
                        />
                      </g></svg
                  ></span>
                  <span class="badge badge--soft badge--success"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="m19 15l-7-6l-7 6"
                      />
                    </svg>
                    23%</span
                  >
                </div>
                <div class="stat">
                  <div class="stat__value">4,732</div>
                  <div class="stat__label text-eyebrow">Units Sold · MTD</div>
                </div>
                <div id="sparkSales" class="sparkline sparkline--hero"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="page__section">
        <div class="grid grid-cols-12 gap-4 items-start">
          <div class="col-span-12 xl:col-span-8">
            <div class="card">
              <div class="card__header">
                <span class="card__title">Sales Performance</span>
                <div class="chart-legend">
                  <span class="chart-legend__item">
                    <span class="indicator indicator--primary"></span>
                    Sales
                  </span>
                  <span class="chart-legend__item">
                    <span class="indicator indicator--danger"></span>
                    Budget
                  </span>
                </div>
              </div>
              <div class="card__body">
                <div class="chart-scroll">
                  <div id="salesChart" class="chart"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 xl:col-span-4">
            <div class="card">
              <div class="card__header">
                <span class="card__title">Top Customers</span>
              </div>

              <div class="media-list">
                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(
                        in oklch,
                        var(--color-primary) 16%,
                        transparent
                      );
                      --avatar-color: var(--color-primary);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <circle cx="9" cy="12" r="6" opacity=".55" />
                      <circle cx="15" cy="12" r="6" opacity=".55" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Acme Corp</div>
                    <div class="media__meta">18 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$24,910</div>
                    <span class="badge badge--soft badge--success text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 14l2.293-2.293a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 0 1.414 0L17 10m0 0v2.5m0-2.5h-2.5"
                          />
                        </g>
                      </svg>
                      12%
                    </span>
                  </div>
                </div>

                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(in oklch, var(--color-info) 16%, transparent);
                      --avatar-color: var(--color-info);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2.2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path d="M4 9l8 5 8-5" />
                      <path d="M4 14l8 5 8-5" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Riverway Ltd</div>
                    <div class="media__meta">11 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$18,200</div>
                    <span class="badge badge--soft badge--success text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 14l2.293-2.293a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 0 1.414 0L17 10m0 0v2.5m0-2.5h-2.5"
                          />
                        </g>
                      </svg>
                      6%
                    </span>
                  </div>
                </div>

                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(
                        in oklch,
                        var(--color-warning) 16%,
                        transparent
                      );
                      --avatar-color: var(--color-warning);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path d="M12 2l2.3 7.4L22 12l-7.7 2.6L12 22l-2.3-7.4L2 12l7.7-2.6z" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Northwind Traders</div>
                    <div class="media__meta">9 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$12,540</div>
                    <span class="badge badge--soft badge--danger text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 10l2.293 2.293a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 1 1.414 0L17 14m0 0v-2.5m0 2.5h-2.5"
                          />
                        </g>
                      </svg>
                      3%
                    </span>
                  </div>
                </div>

                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(
                        in oklch,
                        var(--color-danger) 16%,
                        transparent
                      );
                      --avatar-color: var(--color-danger);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path d="M12 2.5l8.2 4.75v9.5L12 21.5 3.8 16.75v-9.5z" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Globex</div>
                    <div class="media__meta">7 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$9,180</div>
                    <span class="badge badge--soft badge--success text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 14l2.293-2.293a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 0 1.414 0L17 10m0 0v2.5m0-2.5h-2.5"
                          />
                        </g>
                      </svg>
                      8%
                    </span>
                  </div>
                </div>

                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(
                        in oklch,
                        var(--color-success) 16%,
                        transparent
                      );
                      --avatar-color: var(--color-success);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <rect x="3" y="3" width="11" height="11" rx="2.5" opacity=".55" />
                      <rect x="10" y="10" width="11" height="11" rx="2.5" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Initech</div>
                    <div class="media__meta">5 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$6,420</div>
                    <span class="badge badge--soft badge--danger text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 10l2.293 2.293a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 1 1.414 0L17 14m0 0v-2.5m0 2.5h-2.5"
                          />
                        </g>
                      </svg>
                      2%
                    </span>
                  </div>
                </div>

                <div class="media media--seamless">
                  <span
                    class="avatar"
                    style="
                      --avatar-bg: color-mix(
                        in oklch,
                        var(--color-primary) 16%,
                        transparent
                      );
                      --avatar-color: var(--color-primary);
                    "
                  >
                    <svg
                      class="size-[1.4rem]"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <circle cx="7" cy="7" r="3" />
                      <circle cx="17" cy="7" r="3" opacity=".55" />
                      <circle cx="7" cy="17" r="3" opacity=".55" />
                      <circle cx="17" cy="17" r="3" />
                    </svg>
                  </span>
                  <div class="media__content">
                    <div class="media__title">Hooli</div>
                    <div class="media__meta">4 orders</div>
                  </div>
                  <div class="text-end">
                    <div class="font-semibold">$5,180</div>
                    <span class="badge badge--soft badge--success text-xs">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <path
                            d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464C22 4.93 22 7.286 22 12s0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m7 14l2.293-2.293a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 0 1.414 0L17 10m0 0v2.5m0-2.5h-2.5"
                          />
                        </g>
                      </svg>
                      5%
                    </span>
                  </div>
                </div>
              </div>
              <div class="card__footer">
                <a href="#" class="button button--block button--outline button--neutral"
                  >View All</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="page__section">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 sm:col-span-6 xl:col-span-3">
            <div class="card h-full">
              <div class="card__header">
                <span class="card__title">Conversion Funnel</span>
              </div>
              <div class="card__body gap-5">
                <div class="meter">
                  <span class="meter__label">Sessions</span>
                  <span class="meter__value text-foreground font-medium"> 18,420 </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 100%"></span>
                  </div>
                </div>

                <div class="meter">
                  <span class="meter__label">Product Views</span>
                  <span class="meter__value text-foreground font-medium">
                    12,100
                    <span class="text-xs text-muted-foreground">-34%</span>
                  </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 66%"></span>
                  </div>
                </div>

                <div class="meter">
                  <span class="meter__label">Add to Cart</span>
                  <span class="meter__value text-foreground font-medium">
                    7,250
                    <span class="text-xs text-muted-foreground">-40%</span>
                  </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 39%"></span>
                  </div>
                </div>

                <div class="meter">
                  <span class="meter__label">Checkout</span>
                  <span class="meter__value text-foreground font-medium">
                    3,980
                    <span class="text-xs text-muted-foreground">-45%</span>
                  </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 22%"></span>
                  </div>
                </div>

                <div class="meter">
                  <span class="meter__label">Payment Info</span>
                  <span class="meter__value text-foreground font-medium">
                    2,890
                    <span class="text-xs text-muted-foreground">-27%</span>
                  </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 16%"></span>
                  </div>
                </div>

                <div class="meter">
                  <span class="meter__label">Purchased</span>
                  <span class="meter__value text-foreground font-medium">
                    2,140
                    <span class="text-xs text-muted-foreground">-26%</span>
                  </span>
                  <div class="meter__track">
                    <span class="meter__bar meter__bar--primary" style="width: 12%"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-6 xl:col-span-3">
            <div class="card h-full">
              <div class="card__header">
                <span class="card__title">Fulfillment</span>
              </div>
              <div class="card__body">
                <div id="fulfillmentChart" class="chart"></div>
                <div class="stat-detail">
                  <div class="stat-detail__col items-center">
                    <div class="stat-detail__label text-eyebrow">Avg ship</div>
                    <div class="stat-detail__value">1.2d</div>
                  </div>
                  <div class="stat-detail__col items-center">
                    <div class="stat-detail__label text-eyebrow">Returns</div>
                    <div class="stat-detail__value">0.4%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-6 xl:col-span-3">
            <div class="card h-full">
              <div class="card__header">
                <span class="card__title">Order Heatmap</span>
              </div>
              <div class="card__body">
                <div class="flex items-center">
                  <span class="text-lg font-light">Fri · 6PM</span>
                  <span class="text-xs text-muted-foreground ms-2">Peak window</span>
                </div>
                <div id="heatmapChart" class="chart"></div>
                <div class="heatmap-legend">
                  <span class="heatmap-legend__caption">Less</span>
                  <span class="heatmap-legend__swatch opacity-15"></span>
                  <span class="heatmap-legend__swatch opacity-40"></span>
                  <span class="heatmap-legend__swatch opacity-65"></span>
                  <span class="heatmap-legend__swatch opacity-85"></span>
                  <span class="heatmap-legend__swatch opacity-100"></span>
                  <span class="heatmap-legend__caption">More</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-6 xl:col-span-3">
            <div class="card h-full">
              <div class="card__header">
                <span class="card__title">Recent Activity</span>
              </div>
              <div class="card__body">
                <ol class="timeline">
                  <li class="timeline__item">
                    <span class="timeline__marker timeline__marker--success"></span>
                    <div class="timeline__body">
                      <div class="timeline__title">
                        New order <a href="#">#QC-7841</a> from Acme Corp
                      </div>
                      <div class="timeline__time">2 min ago</div>
                    </div>
                  </li>

                  <li class="timeline__item">
                    <span class="timeline__marker timeline__marker--primary"></span>
                    <div class="timeline__body">
                      <div class="timeline__title">
                        Payment captured · <a href="#">$2,410</a>
                      </div>
                      <div class="timeline__time">9 min ago</div>
                    </div>
                  </li>

                  <li class="timeline__item">
                    <span class="timeline__marker timeline__marker--warning"></span>
                    <div class="timeline__body">
                      <div class="timeline__title">Low stock alert · Ion Membrane Pack</div>
                      <div class="timeline__time">22 min ago</div>
                    </div>
                  </li>

                  <li class="timeline__item">
                    <span class="timeline__marker timeline__marker--danger"></span>
                    <div class="timeline__body">
                      <div class="timeline__title">
                        Refund issued <a href="#">#QC-7802</a>
                      </div>
                      <div class="timeline__time">41 min ago</div>
                    </div>
                  </li>

                  <li class="timeline__item">
                    <span class="timeline__marker timeline__marker--primary"></span>
                    <div class="timeline__body">
                      <div class="timeline__title">New customer · Globex onboarded</div>
                      <div class="timeline__time">1 hr ago</div>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="page__section">
        <div class="card">
          <div class="card__header">
            <span class="card__title">Recent Orders</span>
            <a
              href="#"
              class="ms-auto button button--neutral button--ghost button--sm"
              >View all</a
            >
          </div>

          <div class="table-responsive">
            <table class="table table--hover table--align-middle">
              <thead class="table__head--alt">
                <tr>
                  <th scope="col">Order</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Date</th>
                  <th scope="col" class="text-end">Items</th>
                  <th scope="col">Status</th>
                  <th scope="col" class="text-end">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <a href="#" class="link"
                      ><code>#10428</code></a
                    >
                  </th>
                  <td>
                    <div class="flex items-center gap-3">
                      <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                        <img
                          class="avatar__image"
                          src="https://i.pravatar.cc/64?img=12"
                          alt=""
                        />
                        <span class="avatar__fallback">AC</span>
                      </span>
                      <div>
                        <div class="font-medium">Acme Corp</div>
                        <div class="text-xs text-muted-foreground">billing@acme.co</div>
                      </div>
                    </div>
                  </td>
                  <td>Jun 18</td>
                  <td class="text-end">6</td>
                  <td>
                    <span class="badge badge--soft badge--warning"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <circle cx="12" cy="12" r="10" />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 8v4l2.5 2.5"
                          />
                        </g>
                      </svg>
                      Pending</span
                    >
                  </td>
                  <td class="text-end"><span class="font-semibold">$1,490.00</span></td>
                </tr>

                <tr>
                  <th scope="row">
                    <a href="#" class="link"
                      ><code>#10427</code></a
                    >
                  </th>
                  <td>
                    <div class="flex items-center gap-3">
                      <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                        <img
                          class="avatar__image"
                          src="https://i.pravatar.cc/64?img=32"
                          alt=""
                        />
                        <span class="avatar__fallback">RL</span>
                      </span>
                      <div>
                        <div class="font-medium">Riverway Ltd</div>
                        <div class="text-xs text-muted-foreground">ap@riverway.io</div>
                      </div>
                    </div>
                  </td>
                  <td>Jun 17</td>
                  <td class="text-end">2</td>
                  <td>
                    <span class="badge badge--soft badge--info"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none">
                          <path
                            fill="currentColor"
                            d="M7.506 15.265a.75.75 0 0 0 1.446-.4zm-1.43-7.99l.724-.2zM4.705 5.92l-.2.723zM3.2 4.725a.75.75 0 1 0-.402 1.445zm16.988 11a.75.75 0 1 0-.378-1.451zm-9.991 1.834c.31 1.12-.37 2.303-1.574 2.616L9 21.626c1.977-.513 3.185-2.502 2.643-4.467zm-1.574 2.616c-1.212.315-2.428-.389-2.74-1.519l-1.446.4c.54 1.955 2.594 3.082 4.563 2.57zm-2.74-1.519c-.31-1.12.37-2.303 1.574-2.616l-.377-1.45c-1.977.513-3.186 2.502-2.643 4.467zm1.574-2.616c1.212-.315 2.428.389 2.74 1.519l1.446-.4c-.54-1.955-2.594-3.082-4.563-2.57zm1.494-1.175L6.8 7.075l-1.446.4l2.152 7.79zM4.904 5.197l-1.703-.472l-.402 1.445l1.704.473zM6.8 7.075a2.71 2.71 0 0 0-1.896-1.878l-.4 1.446c.425.118.742.44.85.831zm4.31 11.01l9.079-2.36l-.378-1.451l-9.079 2.36z"
                          />
                          <path
                            stroke="currentColor"
                            stroke-width="1.5"
                            d="M9.565 8.73c-.485-1.755-.727-2.633-.315-3.324c.411-.692 1.316-.927 3.126-1.398l1.92-.498c1.81-.47 2.715-.706 3.428-.307c.713.4.956 1.277 1.44 3.033l.515 1.862c.485 1.755.728 2.633.316 3.325c-.412.691-1.317.927-3.127 1.397l-1.92.499c-1.81.47-2.715.705-3.428.306c-.713-.4-.955-1.277-1.44-3.032z"
                          />
                        </g>
                      </svg>
                      Shipped</span
                    >
                  </td>
                  <td class="text-end"><span class="font-semibold">$580.00</span></td>
                </tr>

                <tr>
                  <th scope="row">
                    <a href="#" class="link"
                      ><code>#10426</code></a
                    >
                  </th>
                  <td>
                    <div class="flex items-center gap-3">
                      <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                        <img
                          class="avatar__image"
                          src="https://i.pravatar.cc/64?img=48"
                          alt=""
                        />
                        <span class="avatar__fallback">NT</span>
                      </span>
                      <div>
                        <div class="font-medium">Northwind Traders</div>
                        <div class="text-xs text-muted-foreground">
                          orders@northwind.com
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>Jun 17</td>
                  <td class="text-end">18</td>
                  <td>
                    <span class="badge badge--soft badge--success"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <circle cx="12" cy="12" r="10" />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m8.5 12.5l2 2l5-5"
                          />
                        </g>
                      </svg>
                      Completed</span
                    >
                  </td>
                  <td class="text-end"><span class="font-semibold">$8,200.00</span></td>
                </tr>

                <tr>
                  <th scope="row">
                    <a href="#" class="link"
                      ><code>#10425</code></a
                    >
                  </th>
                  <td>
                    <div class="flex items-center gap-3">
                      <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                        <img
                          class="avatar__image"
                          src="https://i.pravatar.cc/64?img=15"
                          alt=""
                        />
                        <span class="avatar__fallback">GX</span>
                      </span>
                      <div>
                        <div class="font-medium">Globex</div>
                        <div class="text-xs text-muted-foreground">buy@globex.com</div>
                      </div>
                    </div>
                  </td>
                  <td>Jun 16</td>
                  <td class="text-end">1</td>
                  <td>
                    <span class="badge badge--soft badge--danger"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <path
                          fill="currentColor"
                          d="M3.68 11.333h-.75zm0 1.667l-.528.532a.75.75 0 0 0 1.056 0zm2.208-1.134A.75.75 0 1 0 4.83 10.8zM2.528 10.8a.75.75 0 0 0-1.056 1.065zm16.088-3.408a.75.75 0 1 0 1.277-.786zM12.079 2.25c-5.047 0-9.15 4.061-9.15 9.083h1.5c0-4.182 3.42-7.583 7.65-7.583zm-9.15 9.083V13h1.5v-1.667zm1.28 2.2l1.679-1.667L4.83 10.8l-1.68 1.667zm0-1.065L2.528 10.8l-1.057 1.065l1.68 1.666zm15.684-5.86A9.16 9.16 0 0 0 12.08 2.25v1.5a7.66 7.66 0 0 1 6.537 3.643zM20.314 11l.527-.533a.75.75 0 0 0-1.054 0zM18.1 12.133a.75.75 0 0 0 1.055 1.067zm3.373 1.067a.75.75 0 1 0 1.054-1.067zM5.318 16.606a.75.75 0 1 0-1.277.788zm6.565 5.144c5.062 0 9.18-4.058 9.18-9.083h-1.5c0 4.18-3.43 7.583-7.68 7.583zm9.18-9.083V11h-1.5v1.667zm-1.276-2.2L18.1 12.133l1.055 1.067l1.686-1.667zm0 1.066l1.686 1.667l1.054-1.067l-1.686-1.666zM4.04 17.393a9.2 9.2 0 0 0 7.842 4.357v-1.5a7.7 7.7 0 0 1-6.565-3.644z"
                        />
                      </svg>
                      Refunded</span
                    >
                  </td>
                  <td class="text-end"><span class="font-semibold">$240.00</span></td>
                </tr>

                <tr>
                  <th scope="row">
                    <a href="#" class="link"
                      ><code>#10424</code></a
                    >
                  </th>
                  <td>
                    <div class="flex items-center gap-3">
                      <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                        <img
                          class="avatar__image"
                          src="https://i.pravatar.cc/64?img=5"
                          alt=""
                        />
                        <span class="avatar__fallback">IN</span>
                      </span>
                      <div>
                        <div class="font-medium">Initech</div>
                        <div class="text-xs text-muted-foreground">po@initech.com</div>
                      </div>
                    </div>
                  </td>
                  <td>Jun 15</td>
                  <td class="text-end">4</td>
                  <td>
                    <span class="badge badge--soft badge--success"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                          <circle cx="12" cy="12" r="10" />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m8.5 12.5l2 2l5-5"
                          />
                        </g>
                      </svg>
                      Completed</span
                    >
                  </td>
                  <td class="text-end"><span class="font-semibold">$1,120.00</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
