    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </form>

        


        <ul class="nav menu">
            <li class="active"><a href="/home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
            <!--<li><a href="/adminstaff"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> Admin and Staff</a></li>-->

            <li class="dropdown"><a href="/users" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg></use></svg> User <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="/users" onclick="">
                            View Users
                        </a>
                    </li>
                    <li>
                        <a href="/users/create" onclick="">
                            Add New User
                        </a>
                    </li>
                </ul>
            <li class="dropdown"><a href="/transactions" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg></use></svg> Transaction <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="/transactions" onclick="">
                            View Transactions
                        </a>
                    </li>
                    <li>
                        <a href="/transactions/create" onclick="">
                            Add New Transaction
                        </a>
                    </li>
                </ul>
            <li><a href="/inventory"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Inventory</a></li>
            <li><a href="/sales"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Sales</a></li>
            <li><a href="/sendnotif"><svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg> Send  Notification</a></li>

            <li role="presentation" class="divider"></li>
            <li><a href="/about"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>About</a></li>
        </ul>

    </div><!--/.sidebar-->