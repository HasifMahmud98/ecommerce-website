@extends('frontend.shared.base')

@section('title', 'Shop')

@section('content')

    <!-- breedcrumb section start  -->
    <div class="section breedcrumb">
        <div class="breedcrumb__img-wrapper">
            <img src="src/images/banner/breedcrumb.jpg" alt="breedcrumb" />
            <div class="container">
                <ul class="breedcrumb__content">
                    <li>
                        <a href="index.html">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 8L9 1L17 8V18H12V14C12 13.2044 11.6839 12.4413 11.1213 11.8787C10.5587 11.3161 9.79565 11 9 11C8.20435 11 7.44129 11.3161 6.87868 11.8787C6.31607 12.4413 6 13.2044 6 14V18H1V8Z"
                                    stroke="#808080" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span> > </span>
                        </a>
                    </li>
                    <li class="active"><a href="shop-01.html">Shop 1</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breedcrumb section end   -->

    <!-- Filter  -->
    <div class="filter--search">
        <div class="container">
            <div class="filter--search__content row">
                <div class="col-lg-3 d-none d-lg-block">
                    <button class="button button--md" id="filter">
                        Filter
                        <span>
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                                    fill="white" />
                                <path
                                    d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                                    fill="white" />
                                <circle cx="5" cy="5" r="4" stroke="white" stroke-width="1.5" />
                                <circle cx="17" cy="14" r="4" stroke="white" stroke-width="1.5" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="col-lg-9">
                    <div class="filter--search-result">
                        <div class="sort-list">
                            <label for="sort">Sort by:</label>
                            <select id="sort" class="sort-list__dropmenu">
                                <option value="01">Latest</option>
                                <option value="02">Newest</option>
                                <option value="03">Oldest</option>
                            </select>
                        </div>
                        <div class="result-found">
                            <p><span class="number">52</span> Results Found</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop list Section Start  -->
    <section class="shop shop--one">
        <div class="container">
            <div class="row shop-content">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <!-- filter button -->
                        <button class="filter">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 5.75C18.4142 5.75 18.75 5.41421 18.75 5C18.75 4.58579 18.4142 4.25 18 4.25V5.75ZM9 4.25C8.58579 4.25 8.25 4.58579 8.25 5C8.25 5.41421 8.58579 5.75 9 5.75V4.25ZM18 4.25H9V5.75H18V4.25Z"
                                    fill="white"></path>
                                <path
                                    d="M13 14.75C13.4142 14.75 13.75 14.4142 13.75 14C13.75 13.5858 13.4142 13.25 13 13.25V14.75ZM4 13.25C3.58579 13.25 3.25 13.5858 3.25 14C3.25 14.4142 3.58579 14.75 4 14.75V13.25ZM13 13.25H4V14.75H13V13.25Z"
                                    fill="white"></path>
                                <circle cx="5" cy="5" r="4" stroke="white" stroke-width="1.5"></circle>
                                <circle cx="17" cy="14" r="4" stroke="white" stroke-width="1.5"></circle>
                            </svg>
                        </button>
                        <div class="shop__sidebar-content">
                            <div class="accordion shop" id="shop">
                                <!-- All Categories  -->
                                <div class="accordion-item shop-item">
                                    <h2 class="accordion-header" id="shop-item-accordion--one">
                                        <button class="accordion-button shop-button font-body--xxl-500" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            All Categories
                                            <span class="icon">
                                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse shop-collapse collapse show show"
                                        aria-labelledby="shop-item-accordion--one" data-bs-parent="#shop">
                                        <div class="accordion-body shop-body">
                                            <div class="accordion-item shop-item">
                                                <h6 class="accordion-header" id="shop-item-accordion--six">
                                                    <button class="accordion-button shop-button font-body--xxl-200"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSix" aria-expanded="true"
                                                        aria-controls="collapseSix">
                                                        Sub Categories
                                                        <span class="icon">
                                                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </h6>
                                                <div id="collapseSix"
                                                    class="accordion-collapse shop-collapse collapse show show"
                                                    aria-labelledby="shop-item-accordion--six" data-bs-parent="#shop">
                                                    <div class="accordion-body shop-body">
                                                        <div class="categories">
                                                            <div class="categories-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="category" id="fruit" />
                                                                    <label class="form-check-label" for="fruit">
                                                                        Fresh Fruit (25)
                                                                        <span class="current">(134)</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="categories-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="category" id="vegetable" checked />
                                                                    <label class="form-check-label" for="vegetable">
                                                                        Fresh Fruit
                                                                        <span class="current">(150)</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="categories-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="category" id="cooking" checked />
                                                                    <label class="form-check-label" for="cooking">
                                                                        Cooking <span class="current">(54)</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="categories">
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="fruit" />
                                                        <label class="form-check-label" for="fruit">
                                                            Fresh Fruit (25)
                                                            <span class="current">(134)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="vegetable" checked />
                                                        <label class="form-check-label" for="vegetable">
                                                            Fresh Fruit <span class="current">(150)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="cooking" checked />
                                                        <label class="form-check-label" for="cooking">
                                                            Cooking <span class="current">(54)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="snacks" checked />
                                                        <label class="form-check-label" for="snacks">
                                                            Snacks <span class="current">(47)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="beverage" checked />
                                                        <label class="form-check-label" for="beverage">
                                                            Beverages <span class="current">(43)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="health" checked />
                                                        <label class="form-check-label" for="health">
                                                            Beauty & Health
                                                            <span class="current">(38)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="categories-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            id="bread" checked />
                                                        <label class="form-check-label" for="bread">
                                                            Bread & Bakery<span class="current">(15)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price Range -->
                                <div class="accordion-item shop-item">
                                    <h2 class="accordion-header" id="shop-item-accordion--two">
                                        <button class="accordion-button shop-button font-body--xxl-500 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Price
                                            <span class="icon">
                                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse shop-collapse collapse show"
                                        aria-labelledby="shop-item-accordion--two" data-bs-parent="#shop">
                                        <div class="price-range-slider">
                                            <div id="priceRangeSlider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rating  -->
                            <div class="accordion-item shop-item">
                                <h2 class="accordion-header" id="shop-item-accordion--three">
                                    <button class="accordion-button shop-button font-body--xxl-500 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Rating
                                        <span class="icon">
                                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse shop-collapse collapse show"
                                    aria-labelledby="shop-item-accordion--three" data-bs-parent="#shop">
                                    <div class="accordion-body shop-body">
                                        <div class="ratings">
                                            <div class="ratings--list-item">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="ratings"
                                                        id="five" />
                                                    <label class="form-check-label ratings-star d-flex align-items-center"
                                                        for="five">
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <span class="star-num">5.0</span>
                                                </div>
                                            </div>
                                            <div class="ratings--list-item">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="ratings"
                                                        id="four" />
                                                    <label class="form-check-label ratings-star d-flex align-items-center"
                                                        for="four">
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <span class="star-num">4.0 & up</span>
                                                </div>
                                            </div>
                                            <div class="ratings--list-item">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="ratings"
                                                        id="three" />
                                                    <label class="form-check-label ratings-star d-flex align-items-center"
                                                        for="three">
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>

                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <span class="star-num">3.0 & up</span>
                                                </div>
                                            </div>
                                            <div class="ratings--list-item">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="ratings"
                                                        id="two" />
                                                    <label class="form-check-label ratings-star d-flex align-items-center"
                                                        for="two">
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <span class="star-num">2.0 & up</span>
                                                </div>
                                            </div>
                                            <div class="ratings--list-item">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="ratings"
                                                        id="one" />
                                                    <label class="form-check-label ratings-star d-flex align-items-center"
                                                        for="one">
                                                        <span>
                                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.31008 13.9111L12.8566 16.1577C13.31 16.4446 13.8725 16.0177 13.7381 15.4884L12.7138 11.4581C12.6848 11.3458 12.6882 11.2276 12.7234 11.1172C12.7586 11.0067 12.8243 10.9085 12.9129 10.8337L16.0933 8.18711C16.5106 7.83949 16.2958 7.14593 15.7586 7.11105L11.6056 6.84105C11.4938 6.83312 11.3866 6.79359 11.2964 6.72707C11.2061 6.66055 11.1367 6.56977 11.096 6.4653L9.5469 2.56493C9.50471 2.45408 9.42984 2.35867 9.33219 2.29136C9.23455 2.22404 9.11875 2.18799 9.00015 2.18799C8.88155 2.18799 8.76574 2.22404 8.6681 2.29136C8.57046 2.35867 8.49558 2.45408 8.4534 2.56493L6.90427 6.4653C6.86372 6.56988 6.79429 6.66077 6.70406 6.7274C6.61383 6.79402 6.50652 6.83364 6.39465 6.84161L2.24171 7.11161C1.70508 7.14593 1.48908 7.83949 1.90702 8.18711L5.0874 10.8342C5.17588 10.909 5.2415 11.0072 5.27673 11.1175C5.31195 11.2278 5.31534 11.3459 5.28652 11.4581L4.33702 15.1959C4.17558 15.8309 4.85115 16.3434 5.39452 15.9986L8.69077 13.9111C8.78342 13.8522 8.89093 13.8209 9.00071 13.8209C9.11049 13.8209 9.218 13.8522 9.31065 13.9111H9.31008Z"
                                                                    fill="#FF8A00" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.31008 11.9111L11.8566 14.1577C12.31 14.4446 12.8725 14.0177 12.7381 13.4884L11.7138 9.45805C11.6848 9.34579 11.6882 9.22764 11.7234 9.11718C11.7586 9.00673 11.8243 8.90846 11.9129 8.83368L15.0933 6.18711C15.5106 5.83949 15.2958 5.14593 14.7586 5.11105L10.6056 4.84105C10.4938 4.83312 10.3866 4.79359 10.2964 4.72707C10.2061 4.66055 10.1367 4.56977 10.096 4.4653L8.5469 0.564927C8.50471 0.454081 8.42984 0.358673 8.33219 0.291355C8.23455 0.224037 8.11875 0.187988 8.00015 0.187988C7.88155 0.187988 7.76574 0.224037 7.6681 0.291355C7.57046 0.358673 7.49558 0.454081 7.4534 0.564927L5.90427 4.4653C5.86372 4.56988 5.79429 4.66077 5.70406 4.7274C5.61383 4.79402 5.50652 4.83364 5.39465 4.84161L1.24171 5.11161C0.705084 5.14593 0.489084 5.83949 0.907022 6.18711L4.0874 8.83424C4.17588 8.90898 4.2415 9.00715 4.27673 9.11749C4.31195 9.22783 4.31534 9.34587 4.28652 9.45805L3.33702 13.1959C3.17558 13.8309 3.85115 14.3434 4.39452 13.9986L7.69077 11.9111C7.78342 11.8522 7.89093 11.8209 8.00071 11.8209C8.11049 11.8209 8.218 11.8522 8.31065 11.9111H8.31008Z"
                                                                    fill="#CCCCCC" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                    <span class="star-num">1.0 & up</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Popular Tag -->
                            <div class="accordion-item shop-item">
                                <h2 class="accordion-header" id="shop-item-accordion--four">
                                    <button class="accordion-button shop-button font-body--xxl-500 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Popular Tag
                                        <span class="icon">
                                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 7L7 1L1 7" stroke="#1A1A1A" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse shop-collapse collapse show"
                                    aria-labelledby="shop-item-accordion--four" data-bs-parent="#shop">
                                    <div class="accordion-body shop-body">
                                        <div class="popular-tags">
                                            <a href="#" class="tag-btn">Healthy</a>
                                            <a href="#" class="tag-btn active">Low Fat </a>
                                            <a href="#" class="tag-btn">Vegetarian</a>
                                            <a href="#" class="tag-btn">Kid Foods </a>
                                            <a href="#" class="tag-btn">Vitamins</a>
                                            <a href="#" class="tag-btn">Bread</a>
                                            <a href="#" class="tag-btn">Meat</a>
                                            <a href="#" class="tag-btn">Snacks</a>
                                            <a href="#" class="tag-btn">Tiffin</a>
                                            <a href="#" class="tag-btn">Launch</a>
                                            <a href="#" class="tag-btn">Dinner</a>
                                            <a href="#" class="tag-btn">breakfast</a>
                                            <a href="#" class="tag-btn">Fruit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- banner  -->
                            <div class="shop-item">
                                <div class="shop-img-banner">
                                    <img src="src/images/banner/banner-sm-19.jpg" alt="banner-sm" />
                                    <div class="text-content">
                                        <h5><span>79%</span> Discount</h5>
                                        <p>on Your Fast Order</p>
                                        <a href="#" class="button button--md">
                                            Shop now
                                            <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 7.50049H1" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.95001 1.47559L16 7.49959L9.95001 13.5246"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Sales Products  -->
                            <div class="shop-item">
                                <h2 class="font-body--xxl-500" style="margin-bottom: 12px">
                                    Sale Products
                                </h2>
                                <a href="product-details.html" class="shop-sale-product-item">
                                    <div class="product-img">
                                        <img src="src/images/products/img-01.png" alt="products" />
                                    </div>
                                    <div class="product-info">
                                        <h5 class="font-body--md-400">Red Capsicum</h5>
                                        <div class="price">
                                            <span class="current">$32.00</span>
                                            <del class="prev">$20.99</del>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#cccccc" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                                <a href="product-details.html" class="shop-sale-product-item">
                                    <div class="product-img">
                                        <img src="src/images/products/img-02.png" alt="products" />
                                    </div>
                                    <div class="product-info">
                                        <h5 class="font-body--md-400">Red Capsicum</h5>
                                        <div class="price">
                                            <span class="current">$32.00</span>
                                            <del class="prev">$20.99</del>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#cccccc" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                                <a href="product-details.html" class="shop-sale-product-item">
                                    <div class="product-img">
                                        <img src="src/images/products/img-03.png" alt="products" />
                                    </div>
                                    <div class="product-info">
                                        <h5 class="font-body--md-400">Red Capsicum</h5>
                                        <div class="price">
                                            <span class="current">$32.00</span>
                                            <del class="prev">$20.99</del>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#FF8A00" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.20672 8.94078L8.5711 10.4385C8.87335 10.6298 9.24835 10.3452 9.15872 9.99228L8.47585 7.30541C8.45656 7.23057 8.45878 7.1518 8.48227 7.07816C8.50575 7.00453 8.54954 6.93902 8.6086 6.88916L10.7288 5.12478C11.0071 4.89303 10.8638 4.43066 10.5057 4.40741L7.7371 4.22741C7.66255 4.22212 7.59105 4.19577 7.5309 4.15142C7.47075 4.10707 7.42444 4.04656 7.39735 3.97691L6.3646 1.37666C6.33648 1.30276 6.28656 1.23916 6.22146 1.19428C6.15636 1.1494 6.07916 1.12537 6.0001 1.12537C5.92103 1.12537 5.84383 1.1494 5.77873 1.19428C5.71364 1.23916 5.66372 1.30276 5.6356 1.37666L4.60285 3.97691C4.57581 4.04663 4.52952 4.10722 4.46937 4.15164C4.40922 4.19606 4.33768 4.22246 4.2631 4.22778L1.49447 4.40778C1.13672 4.43066 0.992723 4.89303 1.27135 5.12478L3.3916 6.88953C3.45059 6.93936 3.49434 7.00481 3.51782 7.07837C3.5413 7.15193 3.54356 7.23062 3.52435 7.30541L2.89135 9.79728C2.78372 10.2207 3.2341 10.5623 3.59635 10.3324L5.79385 8.94078C5.85561 8.90152 5.92728 8.88066 6.00047 8.88066C6.07366 8.88066 6.14533 8.90152 6.2071 8.94078H6.20672Z"
                                                        fill="#cccccc" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Desktop Version  -->
                    <div class="row shop__product-items">
                        @forelse ($products as $item)
                            <div class="col-xl-4 col-md-6">
                                <div class="cards-md cards-md--four w-100">
                                    <div class="cards-md__img-wrapper">
                                        <a href="product-details.html">
                                            @if (count($item->images) > 0)
                                                <img src="{{ asset('images/products-image/' . $item->images[0]->image) }}"
                                                    alt="{{ $item->title }}" />
                                            @endif
                                        </a>
                                        <span class="tag danger font-body--md-400">sale 50%</span>
                                        <div class="cards-md__favs-list">
                                            <span class="action-btn">
                                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.9996 16.5451C-6.66672 7.3333 4.99993 -2.6667 9.9996 3.65668C14.9999 -2.6667 26.6666 7.3333 9.9996 16.5451Z"
                                                        stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                            </span>
                                            <span class="action-btn" data-bs-toggle="modal"
                                                data-bs-target="#productView">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102V3.54102Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10 13.125C10.8288 13.125 11.6237 12.7958 12.2097 12.2097C12.7958 11.6237 13.125 10.8288 13.125 10C13.125 9.1712 12.7958 8.37634 12.2097 7.79029C11.6237 7.20424 10.8288 6.875 10 6.875C9.1712 6.875 8.37634 7.20424 7.79029 7.79029C7.20424 8.37634 6.875 9.1712 6.875 10C6.875 10.8288 7.20424 11.6237 7.79029 12.2097C8.37634 12.7958 9.1712 13.125 10 13.125V13.125Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cards-md__info d-flex justify-content-between align-items-center">
                                        <a href="product-details.html" class="cards-md__info-left">
                                            <h6 class="font-body--md-400">{{ $item->title }}</h6>
                                            <div class="cards-md__info-price">
                                                <span class="font-body--lg-500">??? {{ $item->price }}</span>
                                                {{-- <del class="font-body--lg-400">??? {{ $item->offerprice }}</del> --}}
                                            </div>
                                            <ul class="cards-md__info-rating d-flex">
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.20663 9.44078L8.57101 10.9385C8.87326 11.1298 9.24826 10.8452 9.15863 10.4923L8.47576 7.80541C8.45647 7.73057 8.45869 7.6518 8.48217 7.57816C8.50566 7.50453 8.54945 7.43902 8.60851 7.38916L10.7288 5.62478C11.007 5.39303 10.8638 4.93066 10.5056 4.90741L7.73701 4.72741C7.66246 4.72212 7.59096 4.69577 7.53081 4.65142C7.47066 4.60707 7.42435 4.54656 7.39726 4.47691L6.36451 1.87666C6.33638 1.80276 6.28647 1.73916 6.22137 1.69428C6.15627 1.6494 6.07907 1.62537 6.00001 1.62537C5.92094 1.62537 5.84374 1.6494 5.77864 1.69428C5.71354 1.73916 5.66363 1.80276 5.63551 1.87666L4.60276 4.47691C4.57572 4.54663 4.52943 4.60722 4.46928 4.65164C4.40913 4.69606 4.33759 4.72246 4.26301 4.72778L1.49438 4.90778C1.13663 4.93066 0.992631 5.39303 1.27126 5.62478L3.39151 7.38953C3.4505 7.43936 3.49424 7.50481 3.51772 7.57837C3.54121 7.65193 3.54347 7.73062 3.52426 7.80541L2.89126 10.2973C2.78363 10.7207 3.23401 11.0623 3.59626 10.8324L5.79376 9.44078C5.85552 9.40152 5.92719 9.38066 6.00038 9.38066C6.07357 9.38066 6.14524 9.40152 6.20701 9.44078H6.20663Z"
                                                            fill="#CCCCCC"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </a>
                                        <div class="cards-md__info-right">
                                            <span class="action-btn">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.66667 8.83333H4.16667L2.5 18H17.5L15.8333 8.83333H13.3333M6.66667 8.83333V6.33333C6.66667 4.49239 8.15905 3 10 3V3C11.8409 3 13.3333 4.49238 13.3333 6.33333V8.83333M6.66667 8.83333H13.3333M6.66667 8.83333V11.3333M13.3333 8.83333V11.3333"
                                                        stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>

                    <nav aria-label="Page navigation pagination--one" class="pagination-wrapper section--xl"
                        style="padding-top: 20px">
                        <ul class="pagination justify-content-center">
                            <li class="page-item pagination-item disabled">
                                <a class="page-link pagination-link" href="#" tabindex="-1">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.91663 1.16634L1.08329 6.99967L6.91663 12.833" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link active" href="#">1</a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">2</a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">3</a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">4</a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">5</a>
                            </li>
                            <li class="page-item pagination-item">
                                <p class="page-link pagination-link">...</p>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">21</a>
                            </li>
                            <li class="page-item pagination-item">
                                <a class="page-link pagination-link" href="#">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.08337 1.16634L6.91671 6.99967L1.08337 12.833" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop list Section End   -->

    <!-- cal-to-action Section Start  -->
    <section class="call-to-action section--gray">
        <div class="container">
            <div class="newsletter newsletter--one">
                <div class="newsletter__leftcontent">
                    <h2 class="font-body--xxxl-600">Subscribe Our Newsletter</h2>
                    <p class="font-body--md-400">
                        Pellentesque eu nibh eget mauris congue mattis mattis nec tellus.
                        Phasellus imperdiet elit eu magna.
                    </p>
                </div>
                <div class="newsletter__rightcontent">
                    <form action="#">
                        <div class="newsletter__input">
                            <input type="text" placeholder="Your Email Address" />
                            <button class="button button--lg" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </form>
                    <ul class="newsletter__social-icon">
                        <li>
                            <a href="#">
                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.99764 2.98875H9.64089V0.12675C9.35739 0.08775 8.38239 0 7.24689 0C4.87764 0 3.25464 1.49025 3.25464 4.22925V6.75H0.640137V9.9495H3.25464V18H6.46014V9.95025H8.96889L9.36714 6.75075H6.45939V4.5465C6.46014 3.62175 6.70914 2.98875 7.99764 2.98875Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 2.41888C17.3306 2.7125 16.6174 2.90713 15.8737 3.00163C16.6388 2.54488 17.2226 1.82713 17.4971 0.962C16.7839 1.38725 15.9964 1.68763 15.1571 1.85525C14.4799 1.13413 13.5146 0.6875 12.4616 0.6875C10.4186 0.6875 8.77387 2.34575 8.77387 4.37863C8.77387 4.67113 8.79862 4.95238 8.85938 5.22013C5.7915 5.0705 3.07687 3.60013 1.25325 1.36025C0.934875 1.91263 0.748125 2.54488 0.748125 3.2255C0.748125 4.5035 1.40625 5.63638 2.38725 6.29225C1.79437 6.281 1.21275 6.10888 0.72 5.83775C0.72 5.849 0.72 5.86363 0.72 5.87825C0.72 7.6715 1.99912 9.161 3.6765 9.50413C3.37612 9.58625 3.04875 9.62563 2.709 9.62563C2.47275 9.62563 2.23425 9.61213 2.01038 9.56263C2.4885 11.024 3.84525 12.0984 5.4585 12.1333C4.203 13.1154 2.60888 13.7071 0.883125 13.7071C0.5805 13.7071 0.29025 13.6936 0 13.6565C1.63462 14.7106 3.57188 15.3125 5.661 15.3125C12.4515 15.3125 16.164 9.6875 16.164 4.81175C16.164 4.64863 16.1584 4.49113 16.1505 4.33475C16.8829 3.815 17.4982 3.16588 18 2.41888Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24471 0C3.31136 0 0.687744 3.16139 0.687744 6.60855C0.687744 8.20724 1.58103 10.2008 3.01097 10.8331C3.22811 10.931 3.34624 10.8894 3.39462 10.688C3.43737 10.535 3.62525 9.79807 3.71638 9.45042C3.74451 9.33904 3.72988 9.24229 3.63988 9.13766C3.16511 8.58864 2.78821 7.58847 2.78821 6.65017C2.78821 4.24594 4.69967 1.91146 7.9522 1.91146C10.7648 1.91146 12.7325 3.73854 12.7325 6.35204C12.7325 9.30529 11.1698 11.3484 9.13912 11.3484C8.0152 11.3484 7.17816 10.4663 7.44367 9.37505C7.76431 8.07561 8.39321 6.6783 8.39321 5.74113C8.39321 4.90072 7.91844 4.20544 6.94865 4.20544C5.80447 4.20544 4.87631 5.33837 4.87631 6.85943C4.87631 7.82585 5.21832 8.47838 5.21832 8.47838C5.21832 8.47838 4.08652 13.0506 3.87614 13.9045C3.52062 15.3502 3.92451 17.6914 3.95939 17.8928C3.98077 18.0042 4.10565 18.0391 4.1754 17.9479C4.28678 17.8017 5.65484 15.8497 6.03848 14.4389C6.17799 13.9248 6.75064 11.84 6.75064 11.84C7.12753 12.5207 8.21546 13.0911 9.37426 13.0911C12.8214 13.0911 15.3123 10.0613 15.3123 6.30141C15.2999 2.69675 12.215 0 8.24471 0Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="25" height="18" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.0027 24.0548C8.72269 24.0548 8.33602 24.0375 7.05602 23.9815C6.05785 23.9487 5.07259 23.7458 4.14269 23.3815C3.34693 23.0718 2.62426 22.6 2.02058 21.9961C1.4169 21.3922 0.945397 20.6694 0.636019 19.8735C0.28576 18.9402 0.0968427 17.9542 0.0773522 16.9575C0.00268554 15.6802 0.00268555 15.2615 0.00268555 12.0068C0.00268555 8.7175 0.0200189 8.3335 0.0773522 7.06017C0.0972691 6.06486 0.28618 5.08018 0.636019 4.14817C0.945042 3.35128 1.41686 2.62761 2.02134 2.02335C2.62583 1.4191 3.34968 0.947556 4.14669 0.638836C5.07821 0.287106 6.06315 0.0976949 7.05869 0.0788358C8.33202 0.0068358 8.75069 0.00683594 12.0027 0.00683594C15.3094 0.00683594 15.6894 0.0241691 16.9494 0.0788358C17.9467 0.0975025 18.936 0.286836 19.8694 0.638836C20.6661 0.947914 21.3898 1.41958 21.9943 2.02379C22.5987 2.628 23.0706 3.35149 23.38 4.14817C23.736 5.09484 23.9267 6.09484 23.9414 7.10417C24.016 8.3815 24.016 8.79883 24.016 12.0522C24.016 15.3055 23.9974 15.7322 23.9414 16.9948C23.9214 17.9924 23.7321 18.9794 23.3814 19.9135C23.0712 20.7099 22.5988 21.4332 21.9942 22.0373C21.3896 22.6414 20.666 23.1133 19.8694 23.4228C18.936 23.7722 17.9507 23.9615 16.9547 23.9815C15.6814 24.0548 15.264 24.0548 12.0027 24.0548ZM11.9574 2.1175C8.69602 2.1175 8.35735 2.1335 7.08402 2.19084C6.32355 2.20078 5.57042 2.34103 4.85735 2.6055C4.33726 2.80486 3.86471 3.11098 3.47017 3.50414C3.07563 3.89731 2.76786 4.36878 2.56669 4.88817C2.30002 5.60817 2.16002 6.3695 2.15202 7.1375C2.08135 8.4295 2.08135 8.76817 2.08135 12.0068C2.08135 15.2068 2.09335 15.5948 2.15202 16.8788C2.16402 17.6388 2.30402 18.3922 2.56669 19.1055C2.97469 20.1548 3.80669 20.9842 4.85869 21.3868C5.57083 21.653 6.32382 21.7933 7.08402 21.8015C8.37469 21.8762 8.71469 21.8762 11.9574 21.8762C15.228 21.8762 15.5667 21.8602 16.8294 21.8015C17.5899 21.7923 18.3432 21.652 19.056 21.3868C19.5733 21.186 20.0432 20.8796 20.4357 20.4873C20.8282 20.095 21.1348 19.6254 21.336 19.1082C21.6027 18.3882 21.7427 17.6255 21.7507 16.8575H21.7654C21.8227 15.5828 21.8227 15.2428 21.8227 11.9855C21.8227 8.72817 21.808 8.3855 21.7507 7.11217C21.7386 6.35278 21.5984 5.60088 21.336 4.88817C21.1353 4.37023 20.8289 3.89977 20.4364 3.50677C20.0438 3.11376 19.5737 2.80682 19.056 2.6055C18.3427 2.33884 17.5894 2.20017 16.8294 2.19084C15.54 2.1175 15.2027 2.1175 11.9574 2.1175ZM12.0027 18.1655C10.7834 18.1663 9.59136 17.8055 8.5772 17.1287C7.56304 16.4519 6.77236 15.4896 6.30517 14.3634C5.83798 13.2373 5.71526 11.9978 5.95254 10.8019C6.18982 9.60598 6.77644 8.50729 7.63819 7.64478C8.49995 6.78228 9.59814 6.19471 10.7939 5.9564C11.9896 5.71808 13.2291 5.83973 14.3557 6.30594C15.4823 6.77216 16.4453 7.56201 17.1229 8.57558C17.8006 9.58916 18.1624 10.7809 18.1627 12.0002C18.1606 13.6337 17.5111 15.1999 16.3565 16.3555C15.2018 17.5111 13.6363 18.162 12.0027 18.1655ZM12.0027 7.9975C11.2116 7.9975 10.4382 8.2321 9.78041 8.67162C9.12261 9.11115 8.60992 9.73586 8.30717 10.4668C8.00442 11.1977 7.9252 12.0019 8.07954 12.7779C8.23388 13.5538 8.61485 14.2665 9.17426 14.8259C9.73367 15.3853 10.4464 15.7663 11.2223 15.9206C11.9982 16.075 12.8025 15.9958 13.5334 15.693C14.2643 15.3903 14.889 14.8776 15.3286 14.2198C15.7681 13.562 16.0027 12.7886 16.0027 11.9975C16.0002 10.9374 15.578 9.92141 14.8284 9.1718C14.0788 8.42219 13.0628 7.99997 12.0027 7.9975ZM18.4027 7.04683C18.2139 7.04613 18.0272 7.00826 17.8531 6.93538C17.6789 6.8625 17.5209 6.75604 17.3879 6.62208C17.1193 6.35153 16.9693 5.98537 16.9707 5.60417C16.9721 5.22296 17.1249 4.85793 17.3954 4.58938C17.666 4.32083 18.0321 4.17075 18.4134 4.17217C18.7946 4.17358 19.1596 4.32637 19.4281 4.59693C19.6967 4.86748 19.8468 5.23363 19.8454 5.61484C19.8439 5.99604 19.6912 6.36107 19.4206 6.62962C19.15 6.89817 18.7839 7.04825 18.4027 7.04683Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- cal-to-action Section end  -->

@endsection
