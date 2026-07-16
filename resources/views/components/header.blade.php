<header class="navbar">
  <button
    type="button"
    class="button button--ghost button--neutral button--icon-only button--flush-start"
    data-stisla-app-shell-toggle="auto"
    aria-label="Toggle sidebar"
  >
    <svg
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
        stroke-width="1.5"
        d="M20 7H4m16 5H4m16 5H4"
      />
    </svg>
  </button>

  <div class="input-group input-group--search hidden lg:flex">
    <span class="input-group__text">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="1em"
        height="1em"
        viewBox="0 0 24 24"
        aria-hidden="true"
      >
        <g fill="none" stroke="currentColor" stroke-width="1.5">
          <circle cx="11.5" cy="11.5" r="9.5" />
          <path stroke-linecap="round" d="M18.5 18.5L22 22" />
        </g>
      </svg>
    </span>
    <input
      type="search"
      class="input"
      placeholder="Search orders, products, customers…"
      aria-label="Search"
    />
  </div>
  <div class="ms-auto">
    <div class="flex gap-1">
      <div class="relative">
        <button
          type="button"
          class="button button--ghost button--neutral button--icon-only"
          data-stisla-popover-trigger="messageNotif"
          aria-haspopup="dialog"
          aria-expanded="false"
          aria-controls="messageNotif"
          aria-label="Messages"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1em"
            height="1em"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <g fill="none" stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 12h.009m3.982 0H12m3.991 0H16"
              />
              <path
                stroke-width="1.5"
                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12c0 1.6.376 3.112 1.043 4.453c.178.356.237.763.134 1.148l-.595 2.226a1.3 1.3 0 0 0 1.591 1.592l2.226-.596a1.63 1.63 0 0 1 1.149.133A9.96 9.96 0 0 0 12 22Z"
              />
            </g>
          </svg>
        </button>
        <span class="indicator indicator--warning indicator--pulse absolute top-0 inset-e-0 translate-x-1/2 -translate-y-1/2"></span>
      </div>
      <div
        class="popover popover--menu w-88 max-w-full shadow-xl"
        id="messageNotif"
        data-stisla-popover
        data-stisla-popover-placement="bottom-end"
      >
        <div class="popover__header">
          <h3 class="popover__title">Message</h3>
          <div class="popover__action">
            <a class="button button--sm button--ghost button--primary button--flush-end">
              Mark all as read
            </a>
          </div>
        </div>
        <div class="popover__body">
          <a href="#" class="media media--unread items-start">
            <div class="media__figure mt-1">
              <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                <img
                  class="avatar__image"
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=facearea&facepad=2.5&w=80&h=80&q=80"
                  alt=""
                />
                <span class="avatar__fallback">JC</span>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">Joseph Cooper</div>
              <div class="media__description">
                Pushed 3 commits to atlas/main.
              </div>
              <div class="media__meta">2 minutes ago</div>
            </div>
          </a>
          <a href="#" class="media items-start">
            <div class="media__figure mt-1">
              <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                <img
                  class="avatar__image"
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=facearea&facepad=2.5&w=80&h=80&q=80"
                  alt=""
                />
                <span class="avatar__fallback">SC</span>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">Sarah Chen</div>
              <div class="media__description">
                Can you review the Q3 report draft?
              </div>
              <div class="media__meta">1 hour ago</div>
            </div>
          </a>
          <a href="#" class="media items-start">
            <div class="media__figure mt-1">
              <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                <img
                  class="avatar__image"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2.5&w=80&h=80&q=80"
                  alt=""
                />
                <span class="avatar__fallback">ML</span>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">Marcus Lee</div>
              <div class="media__description">
                Thanks for the quick turnaround.
              </div>
              <div class="media__meta">Yesterday</div>
            </div>
          </a>
        </div>
        <div class="popover__footer">
          <a
            href="#"
            class="button button--block button--outline button--neutral"
          >
            View all messages
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1em"
              height="1em"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12m11.22-3.53a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H8a.75.75 0 0 1 0-1.5h6.19l-1.72-1.72a.75.75 0 0 1 0-1.06"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>
      </div>

      <button
        type="button"
        class="button button--ghost button--neutral button--icon-only"
        data-stisla-popover-trigger="topbarNotif"
        aria-haspopup="dialog"
        aria-expanded="false"
        aria-controls="topbarNotif"
        aria-label="Notifications"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1em"
          height="1em"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <g fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M18.75 9.71v-.705C18.75 5.136 15.726 2 12 2S5.25 5.136 5.25 9.005v.705a4.4 4.4 0 0 1-.692 2.375L3.45 13.81c-1.011 1.575-.239 3.716 1.52 4.214a25.8 25.8 0 0 0 14.06 0c1.759-.498 2.531-2.639 1.52-4.213l-1.108-1.725a4.4 4.4 0 0 1-.693-2.375Z" />
            <path
              stroke-linecap="round"
              d="M7.5 19c.655 1.748 2.422 3 4.5 3s3.845-1.252 4.5-3"
            />
          </g>
        </svg>
      </button>
      <div
        class="popover popover--menu w-80 max-w-full shadow-xl"
        id="topbarNotif"
        data-stisla-popover
        data-stisla-popover-placement="bottom-end"
      >
        <div class="popover__header">
          <h3 class="popover__title">Notifications</h3>
          <div class="popover__action">
            <a class="button button--sm button--ghost button--primary button--flush-end">
              Mark all as read
            </a>
          </div>
        </div>
        <div class="popover__body">
          <a href="#" class="media items-start">
            <div class="media__figure mt-1">
              <span class="icon-box icon-box--primary">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path
                      stroke-linecap="round"
                      d="m2 3l.265.088c1.32.44 1.98.66 2.357 1.184S5 5.492 5 6.883V9.5c0 2.828 0 4.243.879 5.121c.878.879 2.293.879 5.121.879h8"
                    />
                    <path d="M7.5 18a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3Zm9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3ZM5 6h11.45c2.055 0 3.083 0 3.528.674c.444.675.04 1.619-.77 3.508l-.429 1c-.378.882-.567 1.322-.942 1.57c-.376.248-.856.248-1.815.248H5" />
                  </g>
                </svg>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">New order #10428</div>
              <div class="media__description">
                Acme Corp placed an order for 12 items.
              </div>
              <div class="media__meta">5 minutes ago</div>
            </div>
          </a>
          <a href="#" class="media items-start">
            <div class="media__figure mt-1">
              <span class="icon-box icon-box--danger">
                <svg
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
                      d="M5.312 10.762C8.23 5.587 9.689 3 12 3s3.77 2.587 6.688 7.762l.364.644c2.425 4.3 3.638 6.45 2.542 8.022S17.786 21 12.364 21h-.728c-5.422 0-8.134 0-9.23-1.572s.117-3.722 2.542-8.022z"
                    />
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-width="1.5"
                      d="M12 8v5"
                    />
                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                  </g>
                </svg>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">Low stock alert</div>
              <div class="media__description">
                Headphone Blitz is down to 4 units.
              </div>
              <div class="media__meta">1 hour ago</div>
            </div>
          </a>
          <a href="#" class="media items-start">
            <div class="media__figure mt-1">
              <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
                <img
                  class="avatar__image"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=facearea&facepad=2.5&w=80&h=80&q=80"
                  alt=""
                />
                <span class="avatar__fallback">PP</span>
              </span>
            </div>
            <div class="media__content">
              <div class="media__title">Priya Patel</div>
              <div class="media__description">
                Started following your store.
              </div>
              <div class="media__meta">3 hours ago</div>
            </div>
          </a>
        </div>
        <div class="popover__footer">
          <a
            href="#"
            class="button button--block button--outline button--neutral"
          >
            View all notifications
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1em"
              height="1em"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12m11.22-3.53a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H8a.75.75 0 0 1 0-1.5h6.19l-1.72-1.72a.75.75 0 0 1 0-1.06"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>
      </div>

      <button
        type="button"
        class="button button--ghost button--neutral button--icon-only"
        data-theme-toggle
        aria-label="Toggle theme"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1em"
          height="1em"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <path
            fill="currentColor"
            d="m21.067 11.857l-.642-.388zm-8.924-8.924l-.388-.642zM21.25 12A9.25 9.25 0 0 1 12 21.25v1.5c5.937 0 10.75-4.813 10.75-10.75zM12 21.25A9.25 9.25 0 0 1 2.75 12h-1.5c0 5.937 4.813 10.75 10.75 10.75zM2.75 12A9.25 9.25 0 0 1 12 2.75v-1.5C6.063 1.25 1.25 6.063 1.25 12zm12.75 2.25A5.75 5.75 0 0 1 9.75 8.5h-1.5a7.25 7.25 0 0 0 7.25 7.25zm4.925-2.781A5.75 5.75 0 0 1 15.5 14.25v1.5a7.25 7.25 0 0 0 6.21-3.505zM9.75 8.5a5.75 5.75 0 0 1 2.781-4.925l-.776-1.284A7.25 7.25 0 0 0 8.25 8.5zM12 2.75a.38.38 0 0 1-.268-.118a.3.3 0 0 1-.082-.155c-.004-.031-.002-.121.105-.186l.776 1.284c.503-.304.665-.861.606-1.299c-.062-.455-.42-1.026-1.137-1.026zm9.71 9.495c-.066.107-.156.109-.187.105a.3.3 0 0 1-.155-.082a.38.38 0 0 1-.118-.268h1.5c0-.717-.571-1.075-1.026-1.137c-.438-.059-.995.103-1.299.606z"
          />
        </svg>
      </button>

      <div class="menu">
        <button
          type="button"
          class="button button--ghost button--neutral flex items-center gap-2"
          data-stisla-menu-trigger="topbarUser"
          aria-haspopup="menu"
          aria-expanded="false"
          aria-controls="topbarUser"
        >
          <span class="hidden sm:inline font-medium">Steven Gerrard</span>
          <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
            <img
              class="avatar__image"
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2.5&w=80&h=80&q=80"
              alt=""
            />
            <span class="avatar__fallback">SG</span>
          </span>
          <svg
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
              d="m19 9l-7 6l-7-6"
            />
          </svg>
        </button>
        <div
          class="menu__popup w-48"
          id="topbarUser"
          data-stisla-menu
          role="menu"
          data-state="closed"
        >
          <div
            class="menu__group"
            role="group"
            aria-labelledby="topbarUserHead"
          >
            <h3 class="menu__group-label" id="topbarUserHead">
              Mateo Alvarez
            </h3>
            <a href="#" class="menu__item" role="menuitem">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <circle cx="12" cy="6" r="4" />
                  <path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                </g>
              </svg>
              Profile
            </a>
            <a href="#" class="menu__item" role="menuitem">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <circle cx="12" cy="12" r="3" />
                  <path d="M13.765 2.152C13.398 2 12.932 2 12 2s-1.398 0-1.765.152a2 2 0 0 0-1.083 1.083c-.092.223-.129.484-.143.863a1.62 1.62 0 0 1-.79 1.353a1.62 1.62 0 0 1-1.567.008c-.336-.178-.579-.276-.82-.308a2 2 0 0 0-1.478.396C4.04 5.79 3.806 6.193 3.34 7s-.7 1.21-.751 1.605a2 2 0 0 0 .396 1.479c.148.192.355.353.676.555c.473.297.777.803.777 1.361s-.304 1.064-.777 1.36c-.321.203-.529.364-.676.556a2 2 0 0 0-.396 1.479c.052.394.285.798.75 1.605c.467.807.7 1.21 1.015 1.453a2 2 0 0 0 1.479.396c.24-.032.483-.13.819-.308a1.62 1.62 0 0 1 1.567.008c.483.28.77.795.79 1.353c.014.38.05.64.143.863a2 2 0 0 0 1.083 1.083C10.602 22 11.068 22 12 22s1.398 0 1.765-.152a2 2 0 0 0 1.083-1.083c.092-.223.129-.483.143-.863c.02-.558.307-1.074.79-1.353a1.62 1.62 0 0 1 1.567-.008c.336.178.579.276.819.308a2 2 0 0 0 1.479-.396c.315-.242.548-.646 1.014-1.453s.7-1.21.751-1.605a2 2 0 0 0-.396-1.479c-.148-.192-.355-.353-.676-.555A1.62 1.62 0 0 1 19.562 12c0-.558.304-1.064.777-1.36c.321-.203.529-.364.676-.556a2 2 0 0 0 .396-1.479c-.052-.394-.285-.798-.75-1.605c-.467-.807-.7-1.21-1.015-1.453a2 2 0 0 0-1.479-.396c-.24.032-.483.13-.82.308a1.62 1.62 0 0 1-1.566-.008a1.62 1.62 0 0 1-.79-1.353c-.014-.38-.05-.64-.143-.863a2 2 0 0 0-1.083-1.083Z" />
                </g>
              </svg>
              Settings
            </a>
          </div>
          <hr class="menu__separator" role="separator" />
          <a href="#" class="menu__item" role="menuitem">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1em"
              height="1em"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-width="1.5"
              >
                <path d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878 5.121C20.242 22 18.829 22 16 22h-1c-2.828 0-4.242 0-5.121-.879c-.768-.768-.865-1.946-.877-4.121" />
                <path
                  stroke-linejoin="round"
                  d="M15 12H2m0 0l3.5-3M2 12l3.5 3"
                />
              </g>
            </svg>
            Log out
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
