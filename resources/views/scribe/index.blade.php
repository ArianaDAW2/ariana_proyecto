<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HotelForPets API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-invoices">
                                <a href="#endpoints-GETapi-invoices">GET api/invoices</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-invoices">
                                <a href="#endpoints-POSTapi-invoices">POST api/invoices</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-invoices--id-">
                                <a href="#endpoints-GETapi-invoices--id-">GET api/invoices/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-invoices--id-">
                                <a href="#endpoints-PUTapi-invoices--id-">PUT api/invoices/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-invoices--id-">
                                <a href="#endpoints-DELETEapi-invoices--id-">DELETE api/invoices/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-medical-records">
                                <a href="#endpoints-GETapi-medical-records">GET api/medical-records</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-medical-records">
                                <a href="#endpoints-POSTapi-medical-records">POST api/medical-records</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-medical-records--id-">
                                <a href="#endpoints-GETapi-medical-records--id-">GET api/medical-records/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-medical-records--id-">
                                <a href="#endpoints-PUTapi-medical-records--id-">PUT api/medical-records/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-medical-records--id-">
                                <a href="#endpoints-DELETEapi-medical-records--id-">DELETE api/medical-records/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reservations">
                                <a href="#endpoints-GETapi-reservations">GET api/reservations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reservations">
                                <a href="#endpoints-POSTapi-reservations">POST api/reservations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reservations--id-">
                                <a href="#endpoints-GETapi-reservations--id-">GET api/reservations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-reservations--id-">
                                <a href="#endpoints-PUTapi-reservations--id-">PUT api/reservations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-reservations--id-">
                                <a href="#endpoints-DELETEapi-reservations--id-">DELETE api/reservations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-services">
                                <a href="#endpoints-GETapi-services">GET api/services</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-services">
                                <a href="#endpoints-POSTapi-services">POST api/services</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-services--id-">
                                <a href="#endpoints-GETapi-services--id-">GET api/services/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-services--id-">
                                <a href="#endpoints-PUTapi-services--id-">PUT api/services/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-services--id-">
                                <a href="#endpoints-DELETEapi-services--id-">DELETE api/services/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pets">
                                <a href="#endpoints-GETapi-pets">GET api/pets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-pets">
                                <a href="#endpoints-POSTapi-pets">POST api/pets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pets--id-">
                                <a href="#endpoints-GETapi-pets--id-">GET api/pets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-pets--id-">
                                <a href="#endpoints-PUTapi-pets--id-">PUT api/pets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-pets--id-">
                                <a href="#endpoints-DELETEapi-pets--id-">DELETE api/pets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                                <a href="#endpoints-GETapi-users">GET api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-users">
                                <a href="#endpoints-POSTapi-users">POST api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                                <a href="#endpoints-GETapi-users--id-">GET api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id-">
                                <a href="#endpoints-PUTapi-users--id-">PUT api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                                <a href="#endpoints-DELETEapi-users--id-">DELETE api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-payments">
                                <a href="#endpoints-GETapi-payments">GET api/payments</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 23, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-invoices">GET api/invoices</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-invoices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/invoices" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/invoices"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-invoices">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;invoices&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;reservation_id&quot;: 1,
                &quot;invoice_number&quot;: &quot;FAC-00001&quot;,
                &quot;total&quot;: &quot;190.00&quot;,
                &quot;status&quot;: &quot;paid&quot;,
                &quot;issued_at&quot;: &quot;2026-01-23 18:31:10&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;reservation&quot;: {
                    &quot;id&quot;: 1,
                    &quot;user_id&quot;: 4,
                    &quot;pet_id&quot;: 1,
                    &quot;start_date&quot;: &quot;2026-01-23&quot;,
                    &quot;end_date&quot;: &quot;2026-01-26&quot;,
                    &quot;status&quot;: &quot;confirmed&quot;,
                    &quot;total_price&quot;: &quot;190.00&quot;,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;reservation_id&quot;: 2,
                &quot;invoice_number&quot;: &quot;FAC-00002&quot;,
                &quot;total&quot;: &quot;100.00&quot;,
                &quot;status&quot;: &quot;unpaid&quot;,
                &quot;issued_at&quot;: &quot;2026-01-23 18:31:10&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;reservation&quot;: {
                    &quot;id&quot;: 2,
                    &quot;user_id&quot;: 4,
                    &quot;pet_id&quot;: 2,
                    &quot;start_date&quot;: &quot;2026-01-28&quot;,
                    &quot;end_date&quot;: &quot;2026-01-31&quot;,
                    &quot;status&quot;: &quot;confirmed&quot;,
                    &quot;total_price&quot;: &quot;100.00&quot;,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/invoices?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/invoices?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/invoices?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost:8000/api/invoices&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    },
    &quot;reservations&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 4,
            &quot;pet_id&quot;: 1,
            &quot;start_date&quot;: &quot;2026-01-23&quot;,
            &quot;end_date&quot;: &quot;2026-01-26&quot;,
            &quot;status&quot;: &quot;confirmed&quot;,
            &quot;total_price&quot;: &quot;190.00&quot;,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 4,
            &quot;pet_id&quot;: 2,
            &quot;start_date&quot;: &quot;2026-01-28&quot;,
            &quot;end_date&quot;: &quot;2026-01-31&quot;,
            &quot;status&quot;: &quot;confirmed&quot;,
            &quot;total_price&quot;: &quot;100.00&quot;,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-invoices" data-method="GET"
      data-path="api/invoices"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-invoices"
                    onclick="tryItOut('GETapi-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-invoices"
                    onclick="cancelTryOut('GETapi-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-invoices"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-invoices">POST api/invoices</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-invoices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/invoices" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"reservation_id\": \"architecto\",
    \"invoice_number\": \"architecto\",
    \"total\": 39,
    \"status\": \"unpaid\",
    \"issued_at\": \"2026-01-23T18:56:00\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/invoices"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reservation_id": "architecto",
    "invoice_number": "architecto",
    "total": 39,
    "status": "unpaid",
    "issued_at": "2026-01-23T18:56:00"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-invoices">
</span>
<span id="execution-results-POSTapi-invoices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-invoices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-invoices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-invoices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-invoices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-invoices" data-method="POST"
      data-path="api/invoices"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-invoices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-invoices"
                    onclick="tryItOut('POSTapi-invoices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-invoices"
                    onclick="cancelTryOut('POSTapi-invoices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-invoices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/invoices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-invoices"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-invoices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reservation_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reservation_id"                data-endpoint="POSTapi-invoices"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the reservations table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_number"                data-endpoint="POSTapi-invoices"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total"                data-endpoint="POSTapi-invoices"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-invoices"
               value="unpaid"
               data-component="body">
    <br>
<p>Example: <code>unpaid</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>paid</code></li> <li><code>unpaid</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>issued_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="issued_at"                data-endpoint="POSTapi-invoices"
               value="2026-01-23T18:56:00"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-01-23T18:56:00</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-invoices--id-">GET api/invoices/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/invoices/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/invoices/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-invoices--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;reservation_id&quot;: 1,
    &quot;invoice_number&quot;: &quot;FAC-00001&quot;,
    &quot;total&quot;: &quot;190.00&quot;,
    &quot;status&quot;: &quot;paid&quot;,
    &quot;issued_at&quot;: &quot;2026-01-23 18:31:10&quot;,
    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;reservation&quot;: {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 4,
        &quot;pet_id&quot;: 1,
        &quot;start_date&quot;: &quot;2026-01-23&quot;,
        &quot;end_date&quot;: &quot;2026-01-26&quot;,
        &quot;status&quot;: &quot;confirmed&quot;,
        &quot;total_price&quot;: &quot;190.00&quot;,
        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-invoices--id-" data-method="GET"
      data-path="api/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-invoices--id-"
                    onclick="tryItOut('GETapi-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-invoices--id-"
                    onclick="cancelTryOut('GETapi-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-invoices--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-invoices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-invoices--id-">PUT api/invoices/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/invoices/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"reservation_id\": \"architecto\",
    \"invoice_number\": \"architecto\",
    \"total\": 39,
    \"status\": \"paid\",
    \"issued_at\": \"2026-01-23T18:56:01\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/invoices/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reservation_id": "architecto",
    "invoice_number": "architecto",
    "total": 39,
    "status": "paid",
    "issued_at": "2026-01-23T18:56:01"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-invoices--id-">
</span>
<span id="execution-results-PUTapi-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-invoices--id-" data-method="PUT"
      data-path="api/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-invoices--id-"
                    onclick="tryItOut('PUTapi-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-invoices--id-"
                    onclick="cancelTryOut('PUTapi-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/invoices/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-invoices--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-invoices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reservation_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reservation_id"                data-endpoint="PUTapi-invoices--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the reservations table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>invoice_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="invoice_number"                data-endpoint="PUTapi-invoices--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total"                data-endpoint="PUTapi-invoices--id-"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-invoices--id-"
               value="paid"
               data-component="body">
    <br>
<p>Example: <code>paid</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>paid</code></li> <li><code>unpaid</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>issued_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="issued_at"                data-endpoint="PUTapi-invoices--id-"
               value="2026-01-23T18:56:01"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-01-23T18:56:01</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-invoices--id-">DELETE api/invoices/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-invoices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/invoices/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/invoices/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-invoices--id-">
</span>
<span id="execution-results-DELETEapi-invoices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-invoices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-invoices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-invoices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-invoices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-invoices--id-" data-method="DELETE"
      data-path="api/invoices/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-invoices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-invoices--id-"
                    onclick="tryItOut('DELETEapi-invoices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-invoices--id-"
                    onclick="cancelTryOut('DELETEapi-invoices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-invoices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/invoices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-invoices--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-invoices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-invoices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the invoice. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-medical-records">GET api/medical-records</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-medical-records">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/medical-records" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/medical-records"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-medical-records">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;records&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;pet_id&quot;: 1,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Max&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 1,
                    &quot;user_id&quot;: 4,
                    &quot;name&quot;: &quot;Max&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
                    &quot;age&quot;: 2,
                    &quot;weight&quot;: 35,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;pet_id&quot;: 2,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Nina&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 2,
                    &quot;user_id&quot;: 4,
                    &quot;name&quot;: &quot;Nina&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Persa&quot;,
                    &quot;age&quot;: 12,
                    &quot;weight&quot;: 5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;pet_id&quot;: 3,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Zeus&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 3,
                    &quot;user_id&quot;: 6,
                    &quot;name&quot;: &quot;Zeus&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Labrador&quot;,
                    &quot;age&quot;: 8,
                    &quot;weight&quot;: 28,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;pet_id&quot;: 4,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Nala&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 4,
                    &quot;user_id&quot;: 6,
                    &quot;name&quot;: &quot;Nala&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Siam&eacute;s&quot;,
                    &quot;age&quot;: 14,
                    &quot;weight&quot;: 4.2,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;pet_id&quot;: 5,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Bruno&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 5,
                    &quot;user_id&quot;: 7,
                    &quot;name&quot;: &quot;Bruno&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Bulldog Franc&eacute;s&quot;,
                    &quot;age&quot;: 2,
                    &quot;weight&quot;: 12,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;pet_id&quot;: 6,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Mia&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 6,
                    &quot;user_id&quot;: 7,
                    &quot;name&quot;: &quot;Mia&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Maine Coon&quot;,
                    &quot;age&quot;: 12,
                    &quot;weight&quot;: 7.5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;pet_id&quot;: 7,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Rocky&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 7,
                    &quot;user_id&quot;: 8,
                    &quot;name&quot;: &quot;Rocky&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Golden Retriever&quot;,
                    &quot;age&quot;: 6,
                    &quot;weight&quot;: 30.5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;pet_id&quot;: 8,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Kira&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 8,
                    &quot;user_id&quot;: 8,
                    &quot;name&quot;: &quot;Kira&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Bengal&iacute;&quot;,
                    &quot;age&quot;: 2,
                    &quot;weight&quot;: 5.5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;pet_id&quot;: 9,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Toby&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 9,
                    &quot;user_id&quot;: 9,
                    &quot;name&quot;: &quot;Toby&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Labrador&quot;,
                    &quot;age&quot;: 9,
                    &quot;weight&quot;: 28,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;pet_id&quot;: 10,
                &quot;veterinarian_id&quot;: 2,
                &quot;diagnosis&quot;: &quot;Revisi&oacute;n rutinaria para Mia&quot;,
                &quot;treatment&quot;: &quot;Ninguno necesario. Todo en orden.&quot;,
                &quot;notes&quot;: &quot;La mascota se comporta bien durante la revisi&oacute;n.&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pet&quot;: {
                    &quot;id&quot;: 10,
                    &quot;user_id&quot;: 9,
                    &quot;name&quot;: &quot;Mia&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Persa&quot;,
                    &quot;age&quot;: 5,
                    &quot;weight&quot;: 5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;veterinarian&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;veterinario&quot;,
                    &quot;email&quot;: &quot;vet@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/medical-records?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/medical-records?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/medical-records?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/medical-records?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/medical-records?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/medical-records?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/medical-records&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 12
    },
    &quot;pets&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 4,
            &quot;name&quot;: &quot;Max&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 35,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 4,
            &quot;name&quot;: &quot;Nina&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Persa&quot;,
            &quot;age&quot;: 12,
            &quot;weight&quot;: 5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;user_id&quot;: 6,
            &quot;name&quot;: &quot;Zeus&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Labrador&quot;,
            &quot;age&quot;: 8,
            &quot;weight&quot;: 28,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;user_id&quot;: 6,
            &quot;name&quot;: &quot;Nala&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Siam&eacute;s&quot;,
            &quot;age&quot;: 14,
            &quot;weight&quot;: 4.2,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 7,
            &quot;name&quot;: &quot;Bruno&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Bulldog Franc&eacute;s&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 12,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;user_id&quot;: 7,
            &quot;name&quot;: &quot;Mia&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Maine Coon&quot;,
            &quot;age&quot;: 12,
            &quot;weight&quot;: 7.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;user_id&quot;: 8,
            &quot;name&quot;: &quot;Rocky&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Golden Retriever&quot;,
            &quot;age&quot;: 6,
            &quot;weight&quot;: 30.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;user_id&quot;: 8,
            &quot;name&quot;: &quot;Kira&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Bengal&iacute;&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 5.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;user_id&quot;: 9,
            &quot;name&quot;: &quot;Toby&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Labrador&quot;,
            &quot;age&quot;: 9,
            &quot;weight&quot;: 28,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;user_id&quot;: 9,
            &quot;name&quot;: &quot;Mia&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Persa&quot;,
            &quot;age&quot;: 5,
            &quot;weight&quot;: 5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;user_id&quot;: 10,
            &quot;name&quot;: &quot;Zeus&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
            &quot;age&quot;: 8,
            &quot;weight&quot;: 35,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;user_id&quot;: 10,
            &quot;name&quot;: &quot;Nala&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Maine Coon&quot;,
            &quot;age&quot;: 9,
            &quot;weight&quot;: 7.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;veterinarians&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;veterinario&quot;,
            &quot;email&quot;: &quot;vet@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-medical-records" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-medical-records"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-medical-records"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-medical-records" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-medical-records">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-medical-records" data-method="GET"
      data-path="api/medical-records"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-medical-records', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-medical-records"
                    onclick="tryItOut('GETapi-medical-records');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-medical-records"
                    onclick="cancelTryOut('GETapi-medical-records');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-medical-records"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/medical-records</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-medical-records"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-medical-records"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-medical-records"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-medical-records">POST api/medical-records</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-medical-records">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/medical-records" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"pet_id\": \"architecto\",
    \"veterinarian_id\": \"architecto\",
    \"diagnosis\": \"architecto\",
    \"treatment\": \"architecto\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/medical-records"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pet_id": "architecto",
    "veterinarian_id": "architecto",
    "diagnosis": "architecto",
    "treatment": "architecto",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-medical-records">
</span>
<span id="execution-results-POSTapi-medical-records" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-medical-records"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-medical-records"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-medical-records" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-medical-records">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-medical-records" data-method="POST"
      data-path="api/medical-records"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-medical-records', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-medical-records"
                    onclick="tryItOut('POSTapi-medical-records');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-medical-records"
                    onclick="cancelTryOut('POSTapi-medical-records');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-medical-records"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/medical-records</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-medical-records"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-medical-records"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-medical-records"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pet_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pet_id"                data-endpoint="POSTapi-medical-records"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the pets table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>veterinarian_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="veterinarian_id"                data-endpoint="POSTapi-medical-records"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diagnosis</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diagnosis"                data-endpoint="POSTapi-medical-records"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>treatment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="treatment"                data-endpoint="POSTapi-medical-records"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-medical-records"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-medical-records--id-">GET api/medical-records/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-medical-records--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/medical-records/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/medical-records/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-medical-records--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;pet&quot;: null,
    &quot;veterinarian&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-medical-records--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-medical-records--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-medical-records--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-medical-records--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-medical-records--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-medical-records--id-" data-method="GET"
      data-path="api/medical-records/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-medical-records--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-medical-records--id-"
                    onclick="tryItOut('GETapi-medical-records--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-medical-records--id-"
                    onclick="cancelTryOut('GETapi-medical-records--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-medical-records--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/medical-records/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-medical-records--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-medical-records--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the medical record. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-medical-records--id-">PUT api/medical-records/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-medical-records--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/medical-records/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"pet_id\": \"architecto\",
    \"veterinarian_id\": \"architecto\",
    \"diagnosis\": \"architecto\",
    \"treatment\": \"architecto\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/medical-records/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pet_id": "architecto",
    "veterinarian_id": "architecto",
    "diagnosis": "architecto",
    "treatment": "architecto",
    "notes": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-medical-records--id-">
</span>
<span id="execution-results-PUTapi-medical-records--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-medical-records--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-medical-records--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-medical-records--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-medical-records--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-medical-records--id-" data-method="PUT"
      data-path="api/medical-records/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-medical-records--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-medical-records--id-"
                    onclick="tryItOut('PUTapi-medical-records--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-medical-records--id-"
                    onclick="cancelTryOut('PUTapi-medical-records--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-medical-records--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/medical-records/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/medical-records/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-medical-records--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-medical-records--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the medical record. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pet_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pet_id"                data-endpoint="PUTapi-medical-records--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the pets table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>veterinarian_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="veterinarian_id"                data-endpoint="PUTapi-medical-records--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diagnosis</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diagnosis"                data-endpoint="PUTapi-medical-records--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>treatment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="treatment"                data-endpoint="PUTapi-medical-records--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-medical-records--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-medical-records--id-">DELETE api/medical-records/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-medical-records--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/medical-records/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/medical-records/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-medical-records--id-">
</span>
<span id="execution-results-DELETEapi-medical-records--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-medical-records--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-medical-records--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-medical-records--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-medical-records--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-medical-records--id-" data-method="DELETE"
      data-path="api/medical-records/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-medical-records--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-medical-records--id-"
                    onclick="tryItOut('DELETEapi-medical-records--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-medical-records--id-"
                    onclick="cancelTryOut('DELETEapi-medical-records--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-medical-records--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/medical-records/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-medical-records--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-medical-records--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-medical-records--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the medical record. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-reservations">GET api/reservations</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-reservations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/reservations" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reservations"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reservations">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;reservations&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;user_id&quot;: 4,
                &quot;pet_id&quot;: 1,
                &quot;start_date&quot;: &quot;2026-01-23&quot;,
                &quot;end_date&quot;: &quot;2026-01-26&quot;,
                &quot;status&quot;: &quot;confirmed&quot;,
                &quot;total_price&quot;: &quot;190.00&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;user&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;cliente&quot;,
                    &quot;email&quot;: &quot;client@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                },
                &quot;pet&quot;: {
                    &quot;id&quot;: 1,
                    &quot;user_id&quot;: 4,
                    &quot;name&quot;: &quot;Max&quot;,
                    &quot;species&quot;: &quot;Perro&quot;,
                    &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
                    &quot;age&quot;: 2,
                    &quot;weight&quot;: 35,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;services&quot;: [
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;Hopitalizaci&oacute;n&quot;,
                        &quot;description&quot;: &quot;Cuidados intensivos.&quot;,
                        &quot;base_price&quot;: &quot;40.00&quot;,
                        &quot;is_active&quot;: 1,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 1,
                            &quot;service_id&quot;: 6,
                            &quot;price&quot;: &quot;40.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 9,
                        &quot;name&quot;: &quot;Sesi&oacute;n de fotos&quot;,
                        &quot;description&quot;: &quot;Prometo que no blanqueamos dinero con esto&quot;,
                        &quot;base_price&quot;: &quot;50.00&quot;,
                        &quot;is_active&quot;: 0,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 1,
                            &quot;service_id&quot;: 9,
                            &quot;price&quot;: &quot;50.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 13,
                        &quot;name&quot;: &quot;Animales ex&oacute;ticos&quot;,
                        &quot;description&quot;: &quot;Atenci&oacute;n especial por especie&quot;,
                        &quot;base_price&quot;: &quot;100.00&quot;,
                        &quot;is_active&quot;: 0,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 1,
                            &quot;service_id&quot;: 13,
                            &quot;price&quot;: &quot;100.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 2,
                &quot;user_id&quot;: 4,
                &quot;pet_id&quot;: 2,
                &quot;start_date&quot;: &quot;2026-01-28&quot;,
                &quot;end_date&quot;: &quot;2026-01-31&quot;,
                &quot;status&quot;: &quot;confirmed&quot;,
                &quot;total_price&quot;: &quot;100.00&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;user&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;cliente&quot;,
                    &quot;email&quot;: &quot;client@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                },
                &quot;pet&quot;: {
                    &quot;id&quot;: 2,
                    &quot;user_id&quot;: 4,
                    &quot;name&quot;: &quot;Nina&quot;,
                    &quot;species&quot;: &quot;Gato&quot;,
                    &quot;breed&quot;: &quot;Persa&quot;,
                    &quot;age&quot;: 12,
                    &quot;weight&quot;: 5,
                    &quot;notes&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                },
                &quot;services&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;Alojamiento dog&amp;cat hotel&quot;,
                        &quot;description&quot;: &quot;Habitaci&oacute;n c&oacute;moda con paseos diarios.&quot;,
                        &quot;base_price&quot;: &quot;20.00&quot;,
                        &quot;is_active&quot;: 1,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 2,
                            &quot;service_id&quot;: 1,
                            &quot;price&quot;: &quot;20.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;Adiestramiento B&aacute;sico&quot;,
                        &quot;description&quot;: &quot;Sesi&oacute;n de obediencia b&aacute;sica y juegos.&quot;,
                        &quot;base_price&quot;: &quot;40.00&quot;,
                        &quot;is_active&quot;: 1,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 2,
                            &quot;service_id&quot;: 5,
                            &quot;price&quot;: &quot;40.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;name&quot;: &quot;Hopitalizaci&oacute;n&quot;,
                        &quot;description&quot;: &quot;Cuidados intensivos.&quot;,
                        &quot;base_price&quot;: &quot;40.00&quot;,
                        &quot;is_active&quot;: 1,
                        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;reservation_id&quot;: 2,
                            &quot;service_id&quot;: 6,
                            &quot;price&quot;: &quot;40.00&quot;,
                            &quot;duration&quot;: 60,
                            &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
                        }
                    }
                ]
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/reservations?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/reservations?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/reservations?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost:8000/api/reservations&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    },
    &quot;users&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;admin&quot;,
            &quot;email&quot;: &quot;admin@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=a&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;veterinario&quot;,
            &quot;email&quot;: &quot;vet@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;recepcionista&quot;,
            &quot;email&quot;: &quot;recep@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=r&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;cliente&quot;,
            &quot;email&quot;: &quot;client@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;cuidador&quot;,
            &quot;email&quot;: &quot;cuid@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;cliente1&quot;,
            &quot;email&quot;: &quot;cliente1@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;cliente2&quot;,
            &quot;email&quot;: &quot;cliente2@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;cliente3&quot;,
            &quot;email&quot;: &quot;cliente3@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;cliente4&quot;,
            &quot;email&quot;: &quot;cliente4@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;cliente5&quot;,
            &quot;email&quot;: &quot;cliente5@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        }
    ],
    &quot;pets&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 4,
            &quot;name&quot;: &quot;Max&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 35,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 4,
            &quot;name&quot;: &quot;Nina&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Persa&quot;,
            &quot;age&quot;: 12,
            &quot;weight&quot;: 5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;user_id&quot;: 6,
            &quot;name&quot;: &quot;Zeus&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Labrador&quot;,
            &quot;age&quot;: 8,
            &quot;weight&quot;: 28,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;user_id&quot;: 6,
            &quot;name&quot;: &quot;Nala&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Siam&eacute;s&quot;,
            &quot;age&quot;: 14,
            &quot;weight&quot;: 4.2,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 7,
            &quot;name&quot;: &quot;Bruno&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Bulldog Franc&eacute;s&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 12,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;user_id&quot;: 7,
            &quot;name&quot;: &quot;Mia&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Maine Coon&quot;,
            &quot;age&quot;: 12,
            &quot;weight&quot;: 7.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;user_id&quot;: 8,
            &quot;name&quot;: &quot;Rocky&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Golden Retriever&quot;,
            &quot;age&quot;: 6,
            &quot;weight&quot;: 30.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;user_id&quot;: 8,
            &quot;name&quot;: &quot;Kira&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Bengal&iacute;&quot;,
            &quot;age&quot;: 2,
            &quot;weight&quot;: 5.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;user_id&quot;: 9,
            &quot;name&quot;: &quot;Toby&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Labrador&quot;,
            &quot;age&quot;: 9,
            &quot;weight&quot;: 28,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;user_id&quot;: 9,
            &quot;name&quot;: &quot;Mia&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Persa&quot;,
            &quot;age&quot;: 5,
            &quot;weight&quot;: 5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;user_id&quot;: 10,
            &quot;name&quot;: &quot;Zeus&quot;,
            &quot;species&quot;: &quot;Perro&quot;,
            &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
            &quot;age&quot;: 8,
            &quot;weight&quot;: 35,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;user_id&quot;: 10,
            &quot;name&quot;: &quot;Nala&quot;,
            &quot;species&quot;: &quot;Gato&quot;,
            &quot;breed&quot;: &quot;Maine Coon&quot;,
            &quot;age&quot;: 9,
            &quot;weight&quot;: 7.5,
            &quot;notes&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;services&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Alojamiento dog&amp;cat hotel&quot;,
            &quot;description&quot;: &quot;Habitaci&oacute;n c&oacute;moda con paseos diarios.&quot;,
            &quot;base_price&quot;: &quot;20.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Juegos y comodidades extra&quot;,
            &quot;description&quot;: &quot;A&ntilde;adido: webcam, comida h&uacute;meda y juegos constantes.&quot;,
            &quot;base_price&quot;: &quot;35.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Peluquer&iacute;a Canina Y Felina&quot;,
            &quot;description&quot;: &quot;Ba&ntilde;o, corte de pelo y u&ntilde;as.&quot;,
            &quot;base_price&quot;: &quot;25.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Consulta Veterinaria&quot;,
            &quot;description&quot;: &quot;Revisi&oacute;n general y aviso de pagos extra por llamada.&quot;,
            &quot;base_price&quot;: &quot;30.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Adiestramiento B&aacute;sico&quot;,
            &quot;description&quot;: &quot;Sesi&oacute;n de obediencia b&aacute;sica y juegos.&quot;,
            &quot;base_price&quot;: &quot;40.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Hopitalizaci&oacute;n&quot;,
            &quot;description&quot;: &quot;Cuidados intensivos.&quot;,
            &quot;base_price&quot;: &quot;40.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Consulta online&quot;,
            &quot;description&quot;: &quot;Consulta a trav&eacute;s de videollamada o llamada b&aacute;sica.&quot;,
            &quot;base_price&quot;: &quot;35.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Ciruj&iacute;a&quot;,
            &quot;description&quot;: &quot;Mayor&iacute;a de operaciones.&quot;,
            &quot;base_price&quot;: &quot;500.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Sesi&oacute;n de fotos&quot;,
            &quot;description&quot;: &quot;Prometo que no blanqueamos dinero con esto&quot;,
            &quot;base_price&quot;: &quot;50.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Aromaterapia y SPA&quot;,
            &quot;description&quot;: &quot;Cuidados especiales para la felicidad de tu mascota&quot;,
            &quot;base_price&quot;: &quot;50.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Urgencias 24h&quot;,
            &quot;description&quot;: &quot;Ambulancia y atenci&oacute;n 24h&quot;,
            &quot;base_price&quot;: &quot;50.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Dentista&quot;,
            &quot;description&quot;: &quot;Tratamiento dental y limpieza&quot;,
            &quot;base_price&quot;: &quot;50.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Animales ex&oacute;ticos&quot;,
            &quot;description&quot;: &quot;Atenci&oacute;n especial por especie&quot;,
            &quot;base_price&quot;: &quot;100.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reservations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reservations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reservations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reservations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reservations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reservations" data-method="GET"
      data-path="api/reservations"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reservations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reservations"
                    onclick="tryItOut('GETapi-reservations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reservations"
                    onclick="cancelTryOut('GETapi-reservations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reservations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reservations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-reservations"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reservations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reservations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-reservations">POST api/reservations</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-reservations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/reservations" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"pet_id\": \"architecto\",
    \"start_date\": \"2022-02-16\",
    \"end_date\": \"2052-02-16\",
    \"status\": \"pending\",
    \"total_price\": 39
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reservations"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "pet_id": "architecto",
    "start_date": "2022-02-16",
    "end_date": "2052-02-16",
    "status": "pending",
    "total_price": 39
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reservations">
</span>
<span id="execution-results-POSTapi-reservations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reservations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reservations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reservations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reservations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reservations" data-method="POST"
      data-path="api/reservations"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reservations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reservations"
                    onclick="tryItOut('POSTapi-reservations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reservations"
                    onclick="cancelTryOut('POSTapi-reservations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reservations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reservations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-reservations"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reservations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reservations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-reservations"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pet_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pet_id"                data-endpoint="POSTapi-reservations"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the pets table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-reservations"
               value="2022-02-16"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before or equal to <code>end_date</code>. Example: <code>2022-02-16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-reservations"
               value="2052-02-16"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>start_date</code>. Example: <code>2052-02-16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-reservations"
               value="pending"
               data-component="body">
    <br>
<p>Example: <code>pending</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>completed</code></li> <li><code>cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_price"                data-endpoint="POSTapi-reservations"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-reservations--id-">GET api/reservations/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-reservations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/reservations/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reservations/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reservations--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;user_id&quot;: 4,
    &quot;pet_id&quot;: 1,
    &quot;start_date&quot;: &quot;2026-01-23&quot;,
    &quot;end_date&quot;: &quot;2026-01-26&quot;,
    &quot;status&quot;: &quot;confirmed&quot;,
    &quot;total_price&quot;: &quot;190.00&quot;,
    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;user&quot;: {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;cliente&quot;,
        &quot;email&quot;: &quot;client@mail.es&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;two_factor_confirmed_at&quot;: null,
        &quot;current_team_id&quot;: null,
        &quot;profile_photo_path&quot;: null,
        &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
        &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
    },
    &quot;pet&quot;: {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 4,
        &quot;name&quot;: &quot;Max&quot;,
        &quot;species&quot;: &quot;Perro&quot;,
        &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
        &quot;age&quot;: 2,
        &quot;weight&quot;: 35,
        &quot;notes&quot;: null,
        &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
        &quot;deleted_at&quot;: null
    },
    &quot;services&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Hopitalizaci&oacute;n&quot;,
            &quot;description&quot;: &quot;Cuidados intensivos.&quot;,
            &quot;base_price&quot;: &quot;40.00&quot;,
            &quot;is_active&quot;: 1,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;pivot&quot;: {
                &quot;reservation_id&quot;: 1,
                &quot;service_id&quot;: 6,
                &quot;price&quot;: &quot;40.00&quot;,
                &quot;duration&quot;: 60,
                &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Sesi&oacute;n de fotos&quot;,
            &quot;description&quot;: &quot;Prometo que no blanqueamos dinero con esto&quot;,
            &quot;base_price&quot;: &quot;50.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;pivot&quot;: {
                &quot;reservation_id&quot;: 1,
                &quot;service_id&quot;: 9,
                &quot;price&quot;: &quot;50.00&quot;,
                &quot;duration&quot;: 60,
                &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            }
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Animales ex&oacute;ticos&quot;,
            &quot;description&quot;: &quot;Atenci&oacute;n especial por especie&quot;,
            &quot;base_price&quot;: &quot;100.00&quot;,
            &quot;is_active&quot;: 0,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;pivot&quot;: {
                &quot;reservation_id&quot;: 1,
                &quot;service_id&quot;: 13,
                &quot;price&quot;: &quot;100.00&quot;,
                &quot;duration&quot;: 60,
                &quot;notes&quot;: &quot;Servicio de prueba&quot;,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reservations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reservations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reservations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reservations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reservations--id-" data-method="GET"
      data-path="api/reservations/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reservations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reservations--id-"
                    onclick="tryItOut('GETapi-reservations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reservations--id-"
                    onclick="cancelTryOut('GETapi-reservations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reservations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reservations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-reservations--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-reservations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the reservation. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-reservations--id-">PUT api/reservations/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-reservations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/reservations/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"pet_id\": \"architecto\",
    \"start_date\": \"2022-02-16\",
    \"end_date\": \"2052-02-16\",
    \"status\": \"pending\",
    \"total_price\": 39
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reservations/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "pet_id": "architecto",
    "start_date": "2022-02-16",
    "end_date": "2052-02-16",
    "status": "pending",
    "total_price": 39
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-reservations--id-">
</span>
<span id="execution-results-PUTapi-reservations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-reservations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-reservations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-reservations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-reservations--id-" data-method="PUT"
      data-path="api/reservations/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-reservations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-reservations--id-"
                    onclick="tryItOut('PUTapi-reservations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-reservations--id-"
                    onclick="cancelTryOut('PUTapi-reservations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-reservations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/reservations/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/reservations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-reservations--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-reservations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the reservation. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-reservations--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pet_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pet_id"                data-endpoint="PUTapi-reservations--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the pets table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-reservations--id-"
               value="2022-02-16"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before or equal to <code>end_date</code>. Example: <code>2022-02-16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="PUTapi-reservations--id-"
               value="2052-02-16"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>start_date</code>. Example: <code>2052-02-16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-reservations--id-"
               value="pending"
               data-component="body">
    <br>
<p>Example: <code>pending</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>completed</code></li> <li><code>cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_price"                data-endpoint="PUTapi-reservations--id-"
               value="39"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>39</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-reservations--id-">DELETE api/reservations/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-reservations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/reservations/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reservations/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-reservations--id-">
</span>
<span id="execution-results-DELETEapi-reservations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-reservations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-reservations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-reservations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-reservations--id-" data-method="DELETE"
      data-path="api/reservations/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-reservations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-reservations--id-"
                    onclick="tryItOut('DELETEapi-reservations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-reservations--id-"
                    onclick="cancelTryOut('DELETEapi-reservations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-reservations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/reservations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-reservations--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-reservations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-reservations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the reservation. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-services">GET api/services</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/services" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-services">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;services&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Alojamiento dog&amp;cat hotel&quot;,
                &quot;description&quot;: &quot;Habitaci&oacute;n c&oacute;moda con paseos diarios.&quot;,
                &quot;base_price&quot;: &quot;20.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Juegos y comodidades extra&quot;,
                &quot;description&quot;: &quot;A&ntilde;adido: webcam, comida h&uacute;meda y juegos constantes.&quot;,
                &quot;base_price&quot;: &quot;35.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Peluquer&iacute;a Canina Y Felina&quot;,
                &quot;description&quot;: &quot;Ba&ntilde;o, corte de pelo y u&ntilde;as.&quot;,
                &quot;base_price&quot;: &quot;25.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Consulta Veterinaria&quot;,
                &quot;description&quot;: &quot;Revisi&oacute;n general y aviso de pagos extra por llamada.&quot;,
                &quot;base_price&quot;: &quot;30.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Adiestramiento B&aacute;sico&quot;,
                &quot;description&quot;: &quot;Sesi&oacute;n de obediencia b&aacute;sica y juegos.&quot;,
                &quot;base_price&quot;: &quot;40.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Hopitalizaci&oacute;n&quot;,
                &quot;description&quot;: &quot;Cuidados intensivos.&quot;,
                &quot;base_price&quot;: &quot;40.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Consulta online&quot;,
                &quot;description&quot;: &quot;Consulta a trav&eacute;s de videollamada o llamada b&aacute;sica.&quot;,
                &quot;base_price&quot;: &quot;35.00&quot;,
                &quot;is_active&quot;: 1,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Ciruj&iacute;a&quot;,
                &quot;description&quot;: &quot;Mayor&iacute;a de operaciones.&quot;,
                &quot;base_price&quot;: &quot;500.00&quot;,
                &quot;is_active&quot;: 0,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Sesi&oacute;n de fotos&quot;,
                &quot;description&quot;: &quot;Prometo que no blanqueamos dinero con esto&quot;,
                &quot;base_price&quot;: &quot;50.00&quot;,
                &quot;is_active&quot;: 0,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Aromaterapia y SPA&quot;,
                &quot;description&quot;: &quot;Cuidados especiales para la felicidad de tu mascota&quot;,
                &quot;base_price&quot;: &quot;50.00&quot;,
                &quot;is_active&quot;: 0,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/services?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/services?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/services?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/services?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/services?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/services?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/services&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 13
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-services" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-services"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-services" data-method="GET"
      data-path="api/services"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-services', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-services"
                    onclick="tryItOut('GETapi-services');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-services"
                    onclick="cancelTryOut('GETapi-services');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-services"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/services</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-services"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-services">POST api/services</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/services" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"base_price\": 60,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "base_price": 60,
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-services">
</span>
<span id="execution-results-POSTapi-services" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-services"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-services" data-method="POST"
      data-path="api/services"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-services', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-services"
                    onclick="tryItOut('POSTapi-services');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-services"
                    onclick="cancelTryOut('POSTapi-services');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-services"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/services</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-services"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-services"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-services"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="base_price"                data-endpoint="POSTapi-services"
               value="60"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-services" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-services"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-services" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-services"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-services--id-">GET api/services/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-services--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/services/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-services--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Alojamiento dog&amp;cat hotel&quot;,
    &quot;description&quot;: &quot;Habitaci&oacute;n c&oacute;moda con paseos diarios.&quot;,
    &quot;base_price&quot;: &quot;20.00&quot;,
    &quot;is_active&quot;: 1,
    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-services--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-services--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-services--id-" data-method="GET"
      data-path="api/services/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-services--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-services--id-"
                    onclick="tryItOut('GETapi-services--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-services--id-"
                    onclick="cancelTryOut('GETapi-services--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-services--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/services/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-services--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-services--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the service. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-services--id-">PUT api/services/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-services--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/services/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"base_price\": 60,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "base_price": 60,
    "is_active": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-services--id-">
</span>
<span id="execution-results-PUTapi-services--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-services--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-services--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-services--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-services--id-" data-method="PUT"
      data-path="api/services/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-services--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-services--id-"
                    onclick="tryItOut('PUTapi-services--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-services--id-"
                    onclick="cancelTryOut('PUTapi-services--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-services--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/services/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/services/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-services--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-services--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the service. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-services--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-services--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>base_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="base_price"                data-endpoint="PUTapi-services--id-"
               value="60"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-services--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-services--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-services--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-services--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-services--id-">DELETE api/services/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-services--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/services/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/services/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-services--id-">
</span>
<span id="execution-results-DELETEapi-services--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-services--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-services--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-services--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-services--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-services--id-" data-method="DELETE"
      data-path="api/services/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-services--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-services--id-"
                    onclick="tryItOut('DELETEapi-services--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-services--id-"
                    onclick="cancelTryOut('DELETEapi-services--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-services--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/services/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-services--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-services--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-services--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the service. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-pets">GET api/pets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-pets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/pets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/pets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;pets&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;user_id&quot;: 4,
                &quot;name&quot;: &quot;Max&quot;,
                &quot;species&quot;: &quot;Perro&quot;,
                &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
                &quot;age&quot;: 2,
                &quot;weight&quot;: 35,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;cliente&quot;,
                    &quot;email&quot;: &quot;client@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;user_id&quot;: 4,
                &quot;name&quot;: &quot;Nina&quot;,
                &quot;species&quot;: &quot;Gato&quot;,
                &quot;breed&quot;: &quot;Persa&quot;,
                &quot;age&quot;: 12,
                &quot;weight&quot;: 5,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;cliente&quot;,
                    &quot;email&quot;: &quot;client@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;user_id&quot;: 6,
                &quot;name&quot;: &quot;Zeus&quot;,
                &quot;species&quot;: &quot;Perro&quot;,
                &quot;breed&quot;: &quot;Labrador&quot;,
                &quot;age&quot;: 8,
                &quot;weight&quot;: 28,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;cliente1&quot;,
                    &quot;email&quot;: &quot;cliente1@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;user_id&quot;: 6,
                &quot;name&quot;: &quot;Nala&quot;,
                &quot;species&quot;: &quot;Gato&quot;,
                &quot;breed&quot;: &quot;Siam&eacute;s&quot;,
                &quot;age&quot;: 14,
                &quot;weight&quot;: 4.2,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;cliente1&quot;,
                    &quot;email&quot;: &quot;cliente1@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;user_id&quot;: 7,
                &quot;name&quot;: &quot;Bruno&quot;,
                &quot;species&quot;: &quot;Perro&quot;,
                &quot;breed&quot;: &quot;Bulldog Franc&eacute;s&quot;,
                &quot;age&quot;: 2,
                &quot;weight&quot;: 12,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;cliente2&quot;,
                    &quot;email&quot;: &quot;cliente2@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;user_id&quot;: 7,
                &quot;name&quot;: &quot;Mia&quot;,
                &quot;species&quot;: &quot;Gato&quot;,
                &quot;breed&quot;: &quot;Maine Coon&quot;,
                &quot;age&quot;: 12,
                &quot;weight&quot;: 7.5,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;cliente2&quot;,
                    &quot;email&quot;: &quot;cliente2@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;user_id&quot;: 8,
                &quot;name&quot;: &quot;Rocky&quot;,
                &quot;species&quot;: &quot;Perro&quot;,
                &quot;breed&quot;: &quot;Golden Retriever&quot;,
                &quot;age&quot;: 6,
                &quot;weight&quot;: 30.5,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;cliente3&quot;,
                    &quot;email&quot;: &quot;cliente3@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;user_id&quot;: 8,
                &quot;name&quot;: &quot;Kira&quot;,
                &quot;species&quot;: &quot;Gato&quot;,
                &quot;breed&quot;: &quot;Bengal&iacute;&quot;,
                &quot;age&quot;: 2,
                &quot;weight&quot;: 5.5,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;cliente3&quot;,
                    &quot;email&quot;: &quot;cliente3@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;user_id&quot;: 9,
                &quot;name&quot;: &quot;Toby&quot;,
                &quot;species&quot;: &quot;Perro&quot;,
                &quot;breed&quot;: &quot;Labrador&quot;,
                &quot;age&quot;: 9,
                &quot;weight&quot;: 28,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;cliente4&quot;,
                    &quot;email&quot;: &quot;cliente4@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;user_id&quot;: 9,
                &quot;name&quot;: &quot;Mia&quot;,
                &quot;species&quot;: &quot;Gato&quot;,
                &quot;breed&quot;: &quot;Persa&quot;,
                &quot;age&quot;: 5,
                &quot;weight&quot;: 5,
                &quot;notes&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;owner&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;cliente4&quot;,
                    &quot;email&quot;: &quot;cliente4@mail.es&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;two_factor_confirmed_at&quot;: null,
                    &quot;current_team_id&quot;: null,
                    &quot;profile_photo_path&quot;: null,
                    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/pets?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/pets?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/pets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/pets?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/pets?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/pets?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/pets&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 12
    },
    &quot;owner&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;admin&quot;,
            &quot;email&quot;: &quot;admin@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=a&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;veterinario&quot;,
            &quot;email&quot;: &quot;vet@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;recepcionista&quot;,
            &quot;email&quot;: &quot;recep@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=r&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;cliente&quot;,
            &quot;email&quot;: &quot;client@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;cuidador&quot;,
            &quot;email&quot;: &quot;cuid@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;cliente1&quot;,
            &quot;email&quot;: &quot;cliente1@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;cliente2&quot;,
            &quot;email&quot;: &quot;cliente2@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;cliente3&quot;,
            &quot;email&quot;: &quot;cliente3@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;cliente4&quot;,
            &quot;email&quot;: &quot;cliente4@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;cliente5&quot;,
            &quot;email&quot;: &quot;cliente5@mail.es&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;two_factor_confirmed_at&quot;: null,
            &quot;current_team_id&quot;: null,
            &quot;profile_photo_path&quot;: null,
            &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
            &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pets" data-method="GET"
      data-path="api/pets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pets"
                    onclick="tryItOut('GETapi-pets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pets"
                    onclick="cancelTryOut('GETapi-pets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-pets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-pets">POST api/pets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-pets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/pets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"name\": \"n\",
    \"species\": \"g\",
    \"breed\": \"z\",
    \"age\": 77,
    \"weight\": 8,
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/pets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "name": "n",
    "species": "g",
    "breed": "z",
    "age": 77,
    "weight": 8,
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pets">
</span>
<span id="execution-results-POSTapi-pets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-pets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-pets" data-method="POST"
      data-path="api/pets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pets"
                    onclick="tryItOut('POSTapi-pets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pets"
                    onclick="cancelTryOut('POSTapi-pets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-pets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-pets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-pets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-pets"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-pets"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>species</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="species"                data-endpoint="POSTapi-pets"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>breed</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="breed"                data-endpoint="POSTapi-pets"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>age</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="age"                data-endpoint="POSTapi-pets"
               value="77"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>77</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weight"                data-endpoint="POSTapi-pets"
               value="8"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-pets"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-pets--id-">GET api/pets/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-pets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/pets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/pets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pets--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;user_id&quot;: 4,
    &quot;name&quot;: &quot;Max&quot;,
    &quot;species&quot;: &quot;Perro&quot;,
    &quot;breed&quot;: &quot;Pastor Alem&aacute;n&quot;,
    &quot;age&quot;: 2,
    &quot;weight&quot;: 35,
    &quot;notes&quot;: null,
    &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;owner&quot;: {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;cliente&quot;,
        &quot;email&quot;: &quot;client@mail.es&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;two_factor_confirmed_at&quot;: null,
        &quot;current_team_id&quot;: null,
        &quot;profile_photo_path&quot;: null,
        &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
        &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pets--id-" data-method="GET"
      data-path="api/pets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pets--id-"
                    onclick="tryItOut('GETapi-pets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pets--id-"
                    onclick="cancelTryOut('GETapi-pets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-pets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-pets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pet. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-pets--id-">PUT api/pets/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-pets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/pets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"name\": \"n\",
    \"species\": \"g\",
    \"breed\": \"z\",
    \"age\": 77,
    \"weight\": 8,
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/pets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "name": "n",
    "species": "g",
    "breed": "z",
    "age": 77,
    "weight": 8,
    "notes": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-pets--id-">
</span>
<span id="execution-results-PUTapi-pets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-pets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-pets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-pets--id-" data-method="PUT"
      data-path="api/pets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-pets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-pets--id-"
                    onclick="tryItOut('PUTapi-pets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-pets--id-"
                    onclick="cancelTryOut('PUTapi-pets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-pets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/pets/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/pets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-pets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-pets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pet. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-pets--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-pets--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>species</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="species"                data-endpoint="PUTapi-pets--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>breed</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="breed"                data-endpoint="PUTapi-pets--id-"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>age</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="age"                data-endpoint="PUTapi-pets--id-"
               value="77"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>77</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>weight</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="weight"                data-endpoint="PUTapi-pets--id-"
               value="8"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-pets--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-pets--id-">DELETE api/pets/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-pets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/pets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/pets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pets--id-">
</span>
<span id="execution-results-DELETEapi-pets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-pets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-pets--id-" data-method="DELETE"
      data-path="api/pets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pets--id-"
                    onclick="tryItOut('DELETEapi-pets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pets--id-"
                    onclick="cancelTryOut('DELETEapi-pets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-pets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-pets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-pets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pet. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users">GET api/users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;users&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;admin&quot;,
                &quot;email&quot;: &quot;admin@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=a&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;veterinario&quot;,
                &quot;email&quot;: &quot;vet@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=v&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;recepcionista&quot;,
                &quot;email&quot;: &quot;recep@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=r&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;cliente&quot;,
                &quot;email&quot;: &quot;client@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;cuidador&quot;,
                &quot;email&quot;: &quot;cuid@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:08.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;cliente1&quot;,
                &quot;email&quot;: &quot;cliente1@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;cliente2&quot;,
                &quot;email&quot;: &quot;cliente2@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;cliente3&quot;,
                &quot;email&quot;: &quot;cliente3@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:09.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;cliente4&quot;,
                &quot;email&quot;: &quot;cliente4@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;cliente5&quot;,
                &quot;email&quot;: &quot;cliente5@mail.es&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;two_factor_confirmed_at&quot;: null,
                &quot;current_team_id&quot;: null,
                &quot;profile_photo_path&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;,
                &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=c&amp;color=7F9CF5&amp;background=EBF4FF&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost:8000/api/users&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 10
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-users">POST api/users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
</span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-users--id-">GET api/users/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;admin&quot;,
    &quot;email&quot;: &quot;admin@mail.es&quot;,
    &quot;email_verified_at&quot;: null,
    &quot;two_factor_confirmed_at&quot;: null,
    &quot;current_team_id&quot;: null,
    &quot;profile_photo_path&quot;: null,
    &quot;created_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-23T18:31:07.000000Z&quot;,
    &quot;profile_photo_url&quot;: &quot;https://ui-avatars.com/api/?name=a&amp;color=7F9CF5&amp;background=EBF4FF&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-users--id-">PUT api/users/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-users--id-"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-users--id-">DELETE api/users/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-payments">GET api/payments</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-payments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/payments" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payments"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-payments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;amount&quot;: &quot;190.00&quot;,
        &quot;payment_method&quot;: &quot;credit_card&quot;,
        &quot;paid_at&quot;: &quot;2026-01-23T18:31:10.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-payments" data-method="GET"
      data-path="api/payments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payments"
                    onclick="tryItOut('GETapi-payments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payments"
                    onclick="cancelTryOut('GETapi-payments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-payments"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
