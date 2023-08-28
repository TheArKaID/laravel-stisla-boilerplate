export default function Sidebar() {
    return(
        <div className="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div className="sidebar-brand">
                    <a href="index.html">Stisla</a>
                </div>
                <div className="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">St</a>
                </div>
                <ul className="sidebar-menu">
                    <li className="menu-header">Dashboard</li>
                    <li className="nav-item dropdown active">
                        <a href="/" className="nav-link">
                            <i className="fas fa-fire"></i><span>Dashboard</span>
                        </a>
                    </li>
                </ul>

                <div className="hide-sidebar-mini mt-4 mb-4 p-3">
                    <a href="https://getstisla.com/docs" className="btn btn-primary btn-lg btn-block btn-icon-split">
                        <i className="fas fa-rocket"></i> Documentation
                    </a>
                </div>
            </aside>
        </div>
    );
}