@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow navbar-dark bg-dark"
                style="height: 100vh;">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/dashboard">
                                <span data-feather="Dashboard"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/dashboard/transactions/">
                                <span data-feather="Transactions"></span>
                                Transactions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contacts/create/">
                                <span data-feather="Add Contact"></span>
                                Add Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/transactions/create/">
                                <span data-feather="Send money"></span>
                                Send Money
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/deposit/"">
                        <span data-feather="Deposit"></span>
                                Deposit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/withdraw/"">
                        <span data-feather=" Withdraw"></span>
                                Withdraw
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/posts">
                                <span data-feather="Learning"></span>
                                Learning Center
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Profile</span>
                        <a class="link-secondary" aria-label="Add a new report">
                            <span data-feather="Profile"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/dashboard/edit/">
                                <span data-feather="Change Info"></span>
                                Change Info
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Search Transactions</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="Profile"></span>
                        </a>
                    </h6>

                    <ul class="nav flex-column mb-2 pt-3">
                        <li class="nav-item">
                            <form class="d-flex" action="/transactions/search" method="post">
                                @csrf
                                <!-- {{ csrf_field() }} -->
                                <input type="hidden" name="id" value="<?php $user = auth()->user();
                                echo $user->id; ?>">
                                <input class="form-control me-2" type="search" name="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" value="Submit">Search</button>
                            </form>


                        </li>
                    </ul>
                </div>
            </nav>




            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <main class="container">
                    </main>
                    @include('inc.messages')
                    <h1 class="h2">Dashboard</h1>
                    @include('inc.loggedinMessage')
                </div>
                <br>
                <br>
                <div class="container">
                    @yield('content-dash')
                </div>
            </main>
        </div>
    </div>
@endsection
