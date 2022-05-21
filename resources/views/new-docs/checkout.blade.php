<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>payment api | WASL payment</title>
    <meta name="description" content="payment api for your site :)">
    <link rel="stylesheet" href="/new-docs/assets/style.ed554700.css">
    <link rel="modulepreload" href="/new-docs/assets/app.dd7b6530.js">
    <link rel="modulepreload" href="/new-docs/assets/checkout.md.94f2fd1b.lean.js">
    
    <meta name="twitter:title" content="payment api | WASL payment">
  <meta property="og:title" content="payment api | WASL payment">
  </head>
  <body>
    <div id="app"><!--[--><div class="theme"><header class="nav-bar" data-v-0afa6a56><div class="sidebar-button" data-v-0afa6a56><svg class="icon" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" class></path></svg></div><a class="nav-bar-title" href="/new-docs/" aria-label="WASL payment, back to home" data-v-0afa6a56 data-v-a62db294><!----> WASL payment</a><div class="flex-grow" data-v-0afa6a56></div><div class="nav" data-v-0afa6a56><nav class="nav-links" data-v-0afa6a56 data-v-38cdc740><!--[--><!--]--><!----><!----></nav></div><!--[--><!--]--></header><aside class="sidebar" data-v-592b690d><nav class="nav-links nav" data-v-592b690d data-v-38cdc740><!--[--><!--]--><!----><!----></nav><!--[--><!--]--><ul class="sidebar-links" data-v-592b690d><!--[--><li class="sidebar-link"><a class="sidebar-link-item" href="/new-docs/">Home</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item active" href="/new-docs/checkout">Checkout</a><ul class="sidebar-links"><li class="sidebar-link"><a class="sidebar-link-item" href="#url-format">url format:</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item" href="#request">Request</a><ul class="sidebar-links"><li class="sidebar-link"><a class="sidebar-link-item" href="#request-example">Request Example</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item" href="#response-example">Response Example</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item" href="#headers">Headers</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item" href="#body">Body</a><!----></li></ul></li><li class="sidebar-link"><a class="sidebar-link-item" href="#response-200-400">Response 200 400</a><!----></li></ul></li><li class="sidebar-link"><a class="sidebar-link-item" href="/new-docs/card">Card</a><!----></li><li class="sidebar-link"><a class="sidebar-link-item" href="/new-docs/tutorial">Tutorial</a><!----></li><!--]--></ul><!--[--><!--]--></aside><div class="sidebar-mask"></div><main class="page" data-v-8ace9b76><div class="container" data-v-8ace9b76><!--[--><!--]--><div style="position:relative;" class="content" data-v-8ace9b76><div><h1 id="create-session" tabindex="-1">Create Session <a class="header-anchor" href="#create-session" aria-hidden="true">#</a></h1><p><div class="table-of-contents"><ul><li><a href="#url-format">url format:</a></li><li><a href="#request">Request</a><ul><li><a href="#request-example">Request Example</a></li><li><a href="#response-example">Response Example</a></li><li><a href="#headers">Headers</a></li><li><a href="#body">Body</a></li></ul></li><li><a href="#response-200-400">Response 200 400</a></li></ul></div></p><p><strong><code>POST</code></strong></p><div class="language-bash"><pre><code>https://waslpayment.com/api/test/merchant/payment_order
</code></pre></div><div class="info custom-block"><p class="custom-block-title">INFO</p><p>Create a checkout NEXT_URL. After the NEXT_URL has been created, use the NEXT_URL to redirect the user to the Wasel payment hosted page.</p></div><h2 id="url-format" tabindex="-1">url format: <a class="header-anchor" href="#url-format" aria-hidden="true">#</a></h2><div class="language-js"><pre><code><span class="token literal-property property">https</span><span class="token operator">:</span><span class="token operator">/</span><span class="token operator">/</span>waslpayment<span class="token punctuation">.</span>com<span class="token operator">/</span>api<span class="token operator">/</span>test<span class="token operator">/</span>merchant<span class="token operator">/</span>payment_order
</code></pre></div><h2 id="request" tabindex="-1">Request <a class="header-anchor" href="#request" aria-hidden="true">#</a></h2><table><thead><tr><th>Auth</th></tr></thead><tbody><tr><td>parameters</td></tr><tr><td>Content-Type :application/x-www-form-urlencoded</td></tr></tbody></table><p><strong><code>BODY</code></strong></p><div class="language-bash"><pre><code> <span class="token punctuation">{</span>
<span class="token string">&quot;order_reference&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;123412&quot;</span>,
<span class="token string">&quot;products&quot;</span><span class="token builtin class-name">:</span> <span class="token punctuation">[</span>
<span class="token punctuation">{</span> <span class="token string">&quot;id&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;1&quot;</span>,
<span class="token string">&quot;name&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;product 1&quot;</span>,
<span class="token string">&quot;quantity&quot;</span><span class="token builtin class-name">:</span> <span class="token number">1</span>,
<span class="token string">&quot;unit_amount&quot;</span><span class="token builtin class-name">:</span> <span class="token number">100</span>
<span class="token punctuation">}</span>
<span class="token punctuation">]</span>, <span class="token string">&quot;currency&quot;</span>:YER,
<span class="token string">&quot;total_amount&quot;</span>:1500,
<span class="token string">&quot;success_url&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;https://company.com/success&quot;</span>,
<span class="token string">&quot;cancel_url&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;https://company.com/cancel&quot;</span>,
<span class="token string">&quot;metadata&quot;</span><span class="token builtin class-name">:</span> <span class="token punctuation">{</span>
<span class="token string">&quot;Customer name&quot;</span><span class="token builtin class-name">:</span> <span class="token string">&quot;somename&quot;</span>,
<span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre></div><h3 id="request-example" tabindex="-1">Request Example <a class="header-anchor" href="#request-example" aria-hidden="true">#</a></h3><div class="language-bash"><pre><code> <span class="token function">curl</span> --request POST
--url https://waslpayment.com/api/test/merchant/payment_order
--header <span class="token string">&#39;Content-Type: &#39;</span> application/x-www-form-url
--header <span class="token string">&#39;private and public keys: &#39;</span>
</code></pre></div><p>data:</p><div class="language-json"><pre><code><span class="token punctuation">{</span>
  <span class="token property">&quot;order_reference&quot;</span><span class="token operator">:</span> <span class="token string">&quot;123412&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;products&quot;</span><span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
      <span class="token property">&quot;id&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
      <span class="token property">&quot;product_name&quot;</span><span class="token operator">:</span> <span class="token string">&quot;sumsung s5&quot;</span><span class="token punctuation">,</span>
      <span class="token property">&quot;quantity&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
      <span class="token property">&quot;unit_amount&quot;</span><span class="token operator">:</span> <span class="token number">100</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">&quot;total_amount&quot;</span><span class="token operator">:</span> <span class="token number">1400</span><span class="token punctuation">,</span>
  <span class="token property">&quot;currency&quot;</span><span class="token operator">:</span> <span class="token string">&quot;USD&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;success_url&quot;</span><span class="token operator">:</span> <span class="token string">&quot;https://company.com/success&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;cancel_url&quot;</span><span class="token operator">:</span> <span class="token string">&quot;https://company.com/cancel&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;metadata&quot;</span><span class="token operator">:</span> <span class="token punctuation">{</span>
    <span class="token property">&quot;Customer name&quot;</span><span class="token operator">:</span> <span class="token string">&quot;somename&quot;</span><span class="token punctuation">,</span>
    <span class="token property">&quot;order id&quot;</span><span class="token operator">:</span> <span class="token number">0</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre></div><h3 id="response-example" tabindex="-1">Response Example <a class="header-anchor" href="#response-example" aria-hidden="true">#</a></h3><div class="language-json"><pre><code><span class="token punctuation">{</span>
  <span class="token property">&quot;status&quot;</span><span class="token operator">:</span> <span class="token string">&quot;success&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;order_reference&quot;</span><span class="token operator">:</span> <span class="token string">&quot;12&quot;</span><span class="token punctuation">,</span>
  <span class="token property">&quot;products&quot;</span><span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span> <span class="token property">&quot;id&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token property">&quot;product_name&quot;</span><span class="token operator">:</span> <span class="token string">&quot;colock&quot;</span><span class="token punctuation">,</span> <span class="token property">&quot;quantity&quot;</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token property">&quot;unit_amount&quot;</span><span class="token operator">:</span> <span class="token number">1000</span> <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span> <span class="token property">&quot;id&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token property">&quot;product_name&quot;</span><span class="token operator">:</span> <span class="token string">&quot;watch&quot;</span><span class="token punctuation">,</span> <span class="token property">&quot;quantity&quot;</span><span class="token operator">:</span> <span class="token number">3</span><span class="token punctuation">,</span> <span class="token property">&quot;unit_amount&quot;</span><span class="token operator">:</span> <span class="token number">200</span> <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>
      <span class="token property">&quot;id&quot;</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
      <span class="token property">&quot;product_name&quot;</span><span class="token operator">:</span> <span class="token string">&quot;doll&quot;</span><span class="token punctuation">,</span>
      <span class="token property">&quot;quantity&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
      <span class="token property">&quot;unit_amount&quot;</span><span class="token operator">:</span> <span class="token number">2000</span>
    <span class="token punctuation">}</span>
  <span class="token punctuation">]</span><span class="token punctuation">,</span>
  <span class="token property">&quot;customer_account_info&quot;</span><span class="token operator">:</span> <span class="token punctuation">{</span>
    <span class="token property">&quot;paid_amount&quot;</span><span class="token operator">:</span> <span class="token string">&quot;2300&quot;</span><span class="token punctuation">,</span>
    <span class="token property">&quot;card_holder&quot;</span><span class="token operator">:</span> <span class="token string">&quot;Test Test Test&quot;</span><span class="token punctuation">,</span>
    <span class="token property">&quot;card_type&quot;</span><span class="token operator">:</span> <span class="token string">&quot;visa Card&quot;</span><span class="token punctuation">,</span>
    <span class="token property">&quot;created_at&quot;</span><span class="token operator">:</span> <span class="token string">&quot;2022-05-18T14:43:50.000000Z&quot;</span><span class="token punctuation">,</span>
    <span class="token property">&quot;updated_at&quot;</span><span class="token operator">:</span> <span class="token string">&quot;2022-05-18T14:43:50.000000Z&quot;</span>
  <span class="token punctuation">}</span><span class="token punctuation">,</span>
  <span class="token property">&quot;meta_data&quot;</span><span class="token operator">:</span> <span class="token punctuation">{</span>
    <span class="token property">&quot;customer_id&quot;</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">&quot;merchant_id&quot;</span><span class="token operator">:</span> <span class="token number">3</span><span class="token punctuation">,</span>
    <span class="token property">&quot;details&quot;</span><span class="token operator">:</span> <span class="token string">&quot;new drug order&quot;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre></div><h3 id="headers" tabindex="-1">Headers <a class="header-anchor" href="#headers" aria-hidden="true">#</a></h3><p>content-type:<strong><code>string</code></strong> <br> Default: <strong><code>application/json</code></strong><br></p><details class="details custom-block"><summary>API keys</summary><p>Private and public keys <br> You MUST provide Private and public Keys in order to call any request in Wasel Checkout. Each merchant will have his unique keys which he can generate from the merchant portal directly. For testing purposes, below is the keys that will help you while integrating. Note that this is in UAT ONLY. If you need to move to production, then contact A Wasel Sales to register with Wasel as a merchant and get your own keys. <br> Test Examples:<br> private-key: rRQ26GcsZzoEhbrP2HZvLYDbn9C9et<br> public-key: HGvTMLDssJghr9tlN9gr4DVYt0qyBy</p></details><h3 id="body" tabindex="-1">Body <a class="header-anchor" href="#body" aria-hidden="true">#</a></h3><p>Hover on the most right to know about each property. For more details, please check on the examples provided below.</p><p><strong>order_reference:</strong><code>string</code>** <br></p><p><code>order_reference</code> to be generated by merchant to identify the invoice. <code>&gt;= 1 characters</code> <br> The mode of the checkout session, the default value is payment for a one-time payment. <br><br><strong>products</strong>: array[object]<br> A list of products the customer is purchasing. For payment mode, maximum of 30 products.<br><code>&gt;= 1 items</code> <br><strong>Id: number</strong> <span style="color:red;"> required </span> <br><strong>name: string</strong> <span style="color:red;"> required </span> <br> The name of the product. <code>&gt;= 1 characters</code><br><strong>quantity: number</strong><span style="color:red;"> required </span></p><p>the quantity of the line product. <code>&gt;= 1 &lt;= 20</code></p><p><strong>unit_amount: number</strong><span style="color:red;"> required </span><br></p><p>integer in biz represeting how much to charge per line product. <code>&gt;= 100 &lt;= 999000</code><br> default:<code>100</code><br><strong>total_amount: number</strong> <br> Provide <code>total_amount</code> to allow to get the total of the products.<br> <code>&gt;= 1 characters</code><br><strong>success_url: string</strong> <span style="color:red;"> required </span> <br> The customer would be redirected to success_url if payment processed successfully. <br><code>&gt;= 1 characters</code> <br><strong>cancel_url: string</strong><span style="color:red;"> required </span> <br> The customer will be redirected to cancel_url if he decides to cancel the payment. <br><code>&gt;= 1 characters</code> <br><strong>metadata: object</strong><span style="color:red;"> required </span> <br> Set of key-value pairs. Useful for storing additional information about your products, customers.</p><h2 id="response-200-400" tabindex="-1">Response 200 400 <a class="header-anchor" href="#response-200-400" aria-hidden="true">#</a></h2><p>Checkout response schema. Hover on the most right to know about each property. <br></p><p><strong>success</strong> boolean<br></p><p><strong>code</strong> number<br><strong>description</strong> string <code>&gt;= 1 characters</code></p><p><strong>data</strong> Checkout_Model<br></p><p>Checkout Model. Hover on the most right to know about each property. <br><strong>next_url</strong> string <br> Unique identifier of the next url. It is used to redirect the customer to the Wasl payment hosted page. <code>&gt;= 1 characters</code></p><p><strong>order_reference</strong> string <br> order_reference to be generated by merchant to identify the session. <code>&gt;= 1 characters</code></p><p><strong>customer_id</strong> string <br> Unique identifier of the customer purchasing. <code>&gt;= 1 characters</code></p><p><strong>products</strong> array[object] <br> A list of products the customer is purchasing. <code>&gt;= 1 characters</code></p><p><strong>name</strong> string <br> The name of the product.</p><p><strong>quantity</strong> number <br> the quantity of the line product.</p><p><strong>unit_amount</strong> number <br> integer in biz represeting how much to charge per line product.</p><p><strong>total_amount</strong> number <br> The total amount of the products or plan to pay. It could be the product&#39;s total amount</p><p><strong>currency</strong> string <br> Currency, default is YER. &gt;= 1 characters</p><p><strong>success_url</strong> string <br> The customer would be redirected to success_url if payment processed successfully. <code>&gt;= 1 characters</code></p><p><strong>cancel_url</strong> string <br> The customer will be redirected to cancel_url if he decides to cancel the payment. <code>&gt;= 1 characters</code></p><p><strong>payment_status</strong> string <br> The payment status of the Checkout Session, one of paid, unpaid, or cancelled. You can use this value to decide when to fulfill your customer’s order. <code>&gt;= 1 characters</code> <br> Allowed values: unpaid paid cancelled</p><p><strong>mode</strong> string <br> The mode of the checkout session, the default value is payment, for one-time payment. <code>&gt;= 1 characters</code></p><p><strong>invoice</strong> string <br> Checkout unique invoice. <code>&gt;= 1 characters</code></p><p><strong>metadata</strong> object <br> Set of key-value pairs. Useful for storing additional information about your products, customers.</p><p><strong>created_at</strong> string <br> Time at which the object was created. <code>&gt;= 1 characters</code></p><p><strong>expire_at</strong> string <br> The time is remaining for object to expire. <code>&gt;= 1 characters</code></p></div></div><footer class="page-footer" data-v-8ace9b76 data-v-d4b64b7a><div class="edit" data-v-d4b64b7a><div class="edit-link" data-v-d4b64b7a data-v-03e048d4><!----></div></div><div class="updated" data-v-d4b64b7a><!----></div></footer><div class="next-and-prev-link" data-v-8ace9b76 data-v-7dc2f584><div class="container" data-v-7dc2f584><div class="prev" data-v-7dc2f584><a class="link" href="/new-docs/" data-v-7dc2f584><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="icon icon-prev" data-v-7dc2f584><path d="M19,11H7.4l5.3-5.3c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-7,7c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.2-0.1,0.5,0,0.8c0.1,0.1,0.1,0.2,0.2,0.3l7,7c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L7.4,13H19c0.6,0,1-0.4,1-1S19.6,11,19,11z"></path></svg><span class="text" data-v-7dc2f584>Home</span></a></div><div class="next" data-v-7dc2f584><a class="link" href="/new-docs/card" data-v-7dc2f584><span class="text" data-v-7dc2f584>Card</span><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="icon icon-next" data-v-7dc2f584><path d="M19.9,12.4c0.1-0.2,0.1-0.5,0-0.8c-0.1-0.1-0.1-0.2-0.2-0.3l-7-7c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l5.3,5.3H5c-0.6,0-1,0.4-1,1s0.4,1,1,1h11.6l-5.3,5.3c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l7-7C19.8,12.6,19.9,12.5,19.9,12.4z"></path></svg></a></div></div></div><!--[--><!--]--></div></main></div><!----><!--]--></div>
    <script>__VP_HASH_MAP__ = JSON.parse("{\"card.md\":\"53f376d0\",\"checkout.md\":\"94f2fd1b\",\"index.md\":\"cf3aa920\",\"tutorial.md\":\"02c0648c\"}")</script>
    <script type="module" async src="/new-docs/assets/app.dd7b6530.js"></script>
    
  </body>
</html>