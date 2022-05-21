import { _ as e, c as t, o as a, a as s } from "./app.3ce4190f.js";
const b = '{"title":"payment api","description":"","frontmatter":{"title":"payment api","navbar":true},"headers":[{"level":2,"title":"url format:","slug":"url-format"},{"level":2,"title":"Request","slug":"request"},{"level":3,"title":"Headers","slug":"headers"},{"level":3,"title":"Body","slug":"body"}],"relativePath":"checkout.md"}',
    r = {},
    o = s(`<h1 id="testing-card" tabindex="-1">Testing Card <a class="header-anchor" href="#testing-card" aria-hidden="true">#</a></h1><p><div class="table-of-contents"><ul><li><a href="#url-format">url format:</a></li><li><a href="#request">Request</a><ul><li><a href="#headers">Headers</a></li><li><a href="#body">Body</a></li></ul></li></ul></div></p><p><strong><code>POST</code></strong></p><div class="language-js"><pre><code><span class="token literal-property property">https</span><span class="token operator">:</span><span class="token operator">/</span><span class="token operator">/</span>waslpayment<span class="token punctuation">.</span>com<span class="token operator">/</span>api<span class="token operator">/</span>test<span class="token operator">/</span>merchant<span class="token operator">/</span>payment_order
</code></pre></div><div class="info custom-block"><p class="custom-block-title">INFO</p><p>Create checkout . After the checkout data has been sent, use the next Url to redirect the user to the Wasel payment hosted page.</p></div><h2 id="url-format" tabindex="-1">url format: <a class="header-anchor" href="#url-format" aria-hidden="true">#</a></h2><div class="language-js"><pre><code><span class="token literal-property property">https</span><span class="token operator">:</span><span class="token operator">/</span><span class="token operator">/</span>waslpayment<span class="token punctuation">.</span>com<span class="token operator">/</span>api<span class="token operator">/</span>test<span class="token operator">/</span>merchant<span class="token operator">/</span>payment_order
</code></pre></div><h2 id="request" tabindex="-1">Request <a class="header-anchor" href="#request" aria-hidden="true">#</a></h2><h3 id="headers" tabindex="-1">Headers <a class="header-anchor" href="#headers" aria-hidden="true">#</a></h3><br><h4 id="private-and-public-keys" tabindex="-1">Private and public keys <a class="header-anchor" href="#private-and-public-keys" aria-hidden="true">#</a></h4><div class="danger custom-block"><p class="custom-block-title">WARNING</p><p>You MUST provide Private and public Keys in order to call any request in Wasel Checkout. Each merchant will have his unique keys which he can generate from the merchant portal directly. For testing purposes, below is the keys that will help you while integrating. Note that this is in UAT ONLY. If you need to move to production, then contact A Wasel Sales to register with Wasel as a merchant and get your own keys.</p></div><h5 id="examples" tabindex="-1">Examples: <a class="header-anchor" href="#examples" aria-hidden="true">#</a></h5><ul><li>Private key <code>rRQ26GcsZzoEhbrP2HZvLYDbn9C9et</code></li><li>Public key <code>HGvTMLDssJghr9tlN9gr4DVYt0qyBy</code></li></ul><h3 id="body" tabindex="-1">Body <a class="header-anchor" href="#body" aria-hidden="true">#</a></h3><div class="tip custom-block"><p class="custom-block-title">TIP</p><p>Hover on the most right to know about each property. For more details, please check on the examples provided below.</p></div><br><br><p><strong>body object</strong></p><table><thead><tr><th>param</th><th>type</th></tr></thead><tbody><tr><td>order_reference</td><td><code>string</code></td></tr><tr><td>products</td><td><code>array[object]</code></td></tr></tbody></table><p><strong>products array</strong></p><table><thead><tr><th>param</th><th>type</th></tr></thead><tbody><tr><td>id</td><td><code>number</code></td></tr><tr><td>name</td><td><code>string</code></td></tr><tr><td>quantity</td><td><code>number</code></td></tr><tr><td>unit_amount</td><td><code>number</code></td></tr></tbody></table><div class="info custom-block"><p class="custom-block-title">INFO</p><p><code>order_referenceto</code> be generated by merchant to identify the invoice.</p><p>The mode of the checkout , the default value is payment for a one-time payment.</p></div><div class="info custom-block"><p class="custom-block-title">INFO</p><p><code>products</code> A list of products the customer is purchasing. For payment mode, maximum of 30 products.</p></div>`, 24),
    n = [o];

function d(c, p, l, i, h, u) { return a(), t("div", null, n) }
var y = e(r, [
    ["render", d]
]);
export { b as __pageData, y as default };