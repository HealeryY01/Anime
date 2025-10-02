<?php include '../header.php'; ?>
<div class="product-detail">
    <div class="petals-bg"></div>
    <div class="details container">
        <div class="row">
            <!-- Ảnh sản phẩm + gallery -->
            <div class="col-md-6 ">
                <div class="product-gallery">
                    <!-- Ảnh chính -->
                    <div class="main-image-wrapper">
                        <span class="sale-badge">SALE!</span>
                        <button class="nav-btn left" onclick="prevMain()">&#10094;</button>
                        <div class="main-image">
                            <img src="/ANIME-PHP/img/1.webp" alt="Tên sản phẩm" id="currentImage">
                        </div>
                        <button class="nav-btn right" onclick="nextMain()">&#10095;</button>
                    </div>

                    <!-- Nhóm ảnh nhỏ -->
                    <div class="thumbs-wrapper">
                        <button class="thumb-btn left" onclick="prevThumbs()">&#10094;</button>
                        <div id="thumbs" class="thumbs"></div>
                        <button class="thumb-btn right" onclick="nextThumbs()">&#10095;</button>
                    </div>
                    <!-- Lightbox -->
                    <div id="lightbox" class="lightbox">
                        <div class="lightbox-header">
                            <span id="counter">1 / 11</span>
                            <div class="controls">
                                <button onclick="toggleZoom()" title="Zoom">🔍</button>
                                <button onclick="toggleSlideshow()" id="playBtn" title="Play">▶️</button>
                                <button onclick="closeLightbox()" title="Close">❌</button>
                            </div>
                        </div>

                        <button class="nav prev" onclick="changeSlide(-1)">&#10094;</button>
                        <img id="lightboxImg" src="">
                        <button class="nav next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
                </div>

                <!-- Review Section -->
                <div class="reviews-section">
                    <h3>10 reviews for Goblin Tribal MTG Proxy Commander Deck</h3>
                    <div class="review-list collapsed" id="reviewsBlock">
                        <!-- Review Item-1 -->
                        <div class="review-item">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Anonymous</strong> <span class="verified">(verified owner)</span> – <span class="date">September 30, 2025</span>
                                </p>
                                <p class="review-text">
                                    Incredible! Came quicker than expected, the art is beautiful, plenty of alternative arts came as well AND LANDS TOO!!!
                                    Very excited to mess around with this deck!
                                </p>
                            </div>
                        </div>

                        <!-- Review Item-2 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Juan</strong> <span class="verified">(verified owner)</span> – <span class="date">September 28, 2025</span>
                                </p>
                                <p class="review-text">
                                    Men and woman of culture i highly recommend these decks. I got the Goblin deck and it was pretty good right out the gate.
                                    I wish you could ask for specific cards to be customized so I can have all the same art style.
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-3 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star" style="color:#ccc;"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Anonymous</strong> <span class="verified">(verified owner)</span> – <span class="date"> September 24, 2025</span>
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-4 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-2.png" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Anonymous </strong> <span class="verified">(verified owner)</span> – <span class="date">September 20, 2025</span>
                                </p>
                                <p class="review-text">
                                    Cards are great quality and the theme is fun. Images don’t all feel samey but do match the theme. My only complaint is that some of the text is harder to read on the brightly colored images.
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-5 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Richard Bickmore</strong> <span class="verified">(verified owner)</span> – <span class="date">September 10, 2025</span>
                                </p>
                                <p class="review-text">
                                    beautiful artwork! fantastic proxy deck!
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-6 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Anonymous </strong> <span class="verified">(verified owner)</span> – <span class="date">September 10, 2025</span>
                                </p>
                                <p class="review-text">
                                    Love how optimize this tribal deck performs and I think the artwork is top-notch
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-7 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Shaun H.</strong> <span class="verified">(verified owner)</span> – <span class="date">September 8, 2025</span>
                                </p>
                                <p class="review-text">
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-8 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Emmet</strong> <span class="verified">(verified owner)</span> – <span class="date">September 8, 2025</span>
                                </p>
                                <p class="review-text">
                                    Gorgeous deck! Full of spice and goblins!
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-9 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Bobby Cotter</strong> <span class="verified">(verified owner)</span> – <span class="date">September 7, 2025</span>
                                </p>
                                <p class="review-text">
                                    100/10. These proxys are everything I ever wanted. Every card is custom and all BEAUTIFUL. The quality is out of this world. I have purchased 5 decks from them to this date, and I love every one. Also, Thank you for the “Extra Cards” you gave me when I ordered this one. I went to tge Etsy and bought every similar card you had on there.
                                    I wish you could ask for specific cards to be customized so I can have all the same art style.
                                </p>
                            </div>
                        </div>
                        <!-- Review Item-10 -->
                        <div class="review-item ">
                            <div class="review-avatar">
                                <img src="/ANIME-PHP/img/avata-1.jpg" alt="avatar">
                            </div>
                            <div class="review-content">
                                <div class="review-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="review-author">
                                    <strong>Juan</strong> <span class="verified">(verified owner)</span> – <span class="date">August 31, 2025</span>
                                </p>
                                <p class="review-text">
                                    Really spoiled us this time, spicy alternate art, good build, good side board. Awesome job
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Expand Button -->
                    <a class="toggle-btn"
                        data-more="Expand To Read More ▼"
                        data-less="Collapse To Read Less ▲">
                        Expand To Read More ▼
                    </a>
                    <!-- Add Review -->
                    <div class="add-review">
                        <h4>Add a review</h4>
                        <p>You must be <a href="#">logged in</a> to post a review.</p>
                    </div>
                </div>

            </div>

            <!-- Cột thông tin sản phẩm -->
            <div class="product-information col-md-6 px-5">
                <button class="btn-shop">Shop →</button>

                <!-- Tiêu đề -->
                <h2 class="product-title">Goblin Tribal MTG Proxy Commander Deck</h2>

                <!-- Đánh giá -->
                <div class="reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(10 customer reviews)</span>
                </div>

                <!-- Icon đảm bảo -->
                <ul class="guarantee">
                    <li><i class="fa-solid fa-lock"></i>Secure & Encrypted Checkout</li>
                    <li><i class="fa-solid fa-dollar-sign"></i>14-Day Money-Back Guarantee</li>
                    <li><i class="fa-solid fa-star"></i>Rated 4.9/5 by 7850+ Customers</li>
                    <li><i class="fa-solid fa-truck"></i>Tracked USPS Shipping</li>
                </ul>

                <!-- Chọn loại -->
                <div class="product-option">
                    <label for="finish">Finish</label>
                    <div class="select-wrapper">
                        <select id="finish">
                            <option value="">Choose an option</option>
                            <option value="non-foil" selected>Non-Foil</option>
                            <option value="foil">Foil</option>
                        </select>
                        <a href="#" class="clear">Clear</a>
                    </div>
                </div>

                <!-- Giá -->
                <div class="price">
                    <del>$86.00</del>
                    <span class="sale">$76.00</span>
                </div>

                <!-- Nút mua -->
                <div class="actions">
                    <input type="number" value="1" min="1" class="qty">
                    <button class="btn-cart">Add to cart</button>
                </div>

                <button class="btn-paypal"><img src="/ANIME-PHP/img/pay.svg" alt=""></button>

                <!-- Highlights -->
                <h4 class="fw-bold mt-5">Highlights</h4>
                <p>Manage the mischievous mob with our Goblin Tribal MTG Proxy Commander Deck. Order now!</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> Power Bracket: Optimized (4)</li>
                    <li><i class="fa fa-pepper-hot"></i> Spice Level: Burning (4)</li>
                    <li><i class="fa fa-pen"></i> Made by White Lotus Proxy</li>
                    <li><i class="fa fa-clone "></i> 2.5 x 3.5" Same Exact Size</li>
                    <li><i class="fa fa-layer-group "></i> Materials: 330gsm Black Core German Cardstock</li>
                    <li><i class="fa fa-box"></i> Made to Order: Always Available</li>
                </ul>
                <button class="btn-decklist">Decklist →</button>
                <!-- Đọc thêm -->
                <div class="mt-4 mb-5">
                    <div class="expandable-text collapsed" id="deckDescription">
                        <h5>⭐ What’s Included: ⭐</h5>
                        <p>– Complete 100-card Goblin tribal mtg proxy commander deck.<br>
                            – 4 unique art versions of the commander.<br>
                            – Double-sided tokens including 5 unique goblin tokens.<br>
                            – Alternate art bonus cards.<br>
                            – A sideboard of additional options so you can vary the power level to suit your playgroup. 126 cards total.<br>
                            Join the discord for access to extra spicy promo cards!</p>

                        <h5>⚔️ How It Plays: ⚔️</h5>
                        <p>Well known as a mono red powerhouse, Krenko is an absolute hazard to play against due to the absolute flood of goblins...</p>

                        <h5>🎨 Why Choose Us? 🎨</h5>
                        <p>– 5 Star Reviews – We are the original #1 shop for anime waifu complete commander decks...<br>
                            – Premium Quality – Our cards are made to the highest quality...<br>
                            – Stunning Custom Art – With a background in art and design...<br>
                            – Unbeatable Value – Save yourself time and money...<br>
                            – Community Driven – We care what our customers want!</p>

                        <h5>💰 Buy 3 decks get 1 FREE! 💰</h5>
                        <p>Discount automatically applied when you check out with 4 decks.</p>

                        <h5>🚚 Shipping 🚚</h5>
                        <p>Fast Worldwide Shipping! All cards are securely packed...</p>

                        <h5>😍 Join the Discord Server! 😍</h5>
                        <p>Join for giveaways, exclusive promo cards, and community feedback!</p>

                        <h5>⚠️ Disclaimers ⚠️</h5>
                        <p>We have no affiliation with the owners of any other tcg brand...<br>
                            The metallic foil finish is every card in foil...<br>
                            We are not responsible for any additional customs charges...</p>
                    </div>

                    <a class="toggle-btn"
                        data-more="Expand To Read More ▼"
                        data-less="Collapse To Read Less ▲">
                        Expand To Read More ▼
                    </a>
                </div>

                <!-- Shipping -->
                <h4 class="fw-bold mt-4 mb-4" style="font-size: 18px;">Shipping and return policies</h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-calendar text-pink"></i> Ships out within 5-7 business days</li>
                    <li><i class="fa fa-undo text-pink"></i> Return & exchanges accepted within 14 days</li>
                    <li><i class="fa fa-map-marker text-pink"></i> Ships from: United States</li>
                </ul>
                <!-- discord -->
                <div class="discord-card">
                    <div class="discord-content">
                        <h3>
                            Join Our Discord Channel
                            <span class="icon">
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </span>
                        </h3>
                        <p>
                            Access exclusive discounts, previews, vote on upcoming decks, and join a
                            growing community. Don’t miss the news, join now
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="pairs container">
        <h2 class="">Pairs well with</h2>
        <div class="pairs-well row g-5">
            <!-- Lathril Elves -->
            <div class="col-md-6 col-lg-3">
                <div class="deck-card">
                    <div class="sale-badge">SALE!</div>
                    <div class="deck-image no-hover">
                        <img src="/ANIME-PHP/img/1-7-600x600.webp" alt="Lathril Elves" />
                    </div>
                    <div class="deck-content">
                        <p class="deck-subtitle">Lathril Elves MTG Proxy Commander Deck</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="sale-price">$86.00</span>
                            <span class="diamond-price">$76.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kaalia of the Vast -->
            <div class="col-md-6 col-lg-3">
                <div class="deck-card">
                    <div class="sale-badge">SALE!</div>
                    <div class="deck-image no-hover">
                        <img src="/ANIME-PHP/img/WLP-Kaalia-NEW-1-600x600.webp" alt="Kaalia of the Vast" />
                    </div>
                    <div class="deck-content">
                        <p class="deck-subtitle">Kaalia of the Vast MTG Proxy Commander Deck</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="sale-price">$86.00</span>
                            <span class="diamond-price">$76.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atraxa Infect -->
            <div class="col-md-6 col-lg-3">
                <div class="deck-card">
                    <div class="sale-badge">SALE!</div>
                    <div class="deck-image no-hover">
                        <img src="/ANIME-PHP/img/1-4-600x600.webp" alt="Atraxa Infect" />
                    </div>
                    <div class="deck-content">
                        <p class="deck-subtitle">Atraxa Infect MTG Proxy Commander Deck</p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="sale-price">$76.50</span>
                            <span class="diamond-price">$64.50</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dragon Tribal -->
            <div class="col-md-6 col-lg-3">
                <div class="deck-card">
                    <div class="sale-badge">SALE!</div>
                    <div class="deck-image no-hover">
                        <img src="/ANIME-PHP/img/1-9-600x600.webp" alt="Dragon Tribal" />
                    </div>
                    <div class="deck-content">
                        <p class="deck-subtitle">
                            The Ur-Dragon Tribal MTG Proxy Commander Deck
                        </p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="sale-price">$76.50</span>
                            <span class="diamond-price">$64.50</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../footer.php'; ?>