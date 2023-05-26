<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-2">
                <h5>Milton-Financial</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="register" class="nav-link p-0 text-muted">Sign Up</a></li>
                    <li class="nav-item mb-2"><a href="services" class="nav-link p-0 text-muted">Services</a></li>
                    <li class="nav-item mb-2"><a href="about" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Learning Center</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/posts" class="nav-link p-0 text-muted">Recent Articles</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">How to save</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h5>Our Partners</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="https://www.questrade.com"
                            class="nav-link p-0 text-muted">Questtrade</a></li>
                    <li class="nav-item mb-2"><a href="https://www.belairdirect.com"
                            class="nav-link p-0 text-muted">Belairdirect</a></li>
                    <li class="nav-item mb-2"><a href="https://www.honda.ca" class="nav-link p-0 text-muted">Honda
                            Canada</a></li>
                    <li class="nav-item mb-2"><a
                            href="https://www.jpmorgan.com/commercial-banking/solutions/international-banking"
                            class="nav-link p-0 text-muted">JPMorgan</a></li>
                </ul>
            </div>

            <div class="col-4 offset-1">
                <form action="/newsletter" method="get">
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter" class="visually-hidden">Email address</label>
                        <input id="newsletter" type="email" class="form-control" name="email"
                            placeholder="Email address" required>
                        <button class="btn btn-primary" type="submit" value="Submit">>Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; <?php echo date('Y'); ?> Milton Financial, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </div>
    </footer>
</div>
