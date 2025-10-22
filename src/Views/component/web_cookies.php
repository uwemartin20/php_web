<!-- ✅ Cookie Consent Banner -->
<div id="cookie-banner" style="display: none; position: fixed; bottom: 0; left: 0; right: 0; background-color: #222; color: white; padding: 15px; text-align: center; z-index: 9999; font-family: Arial, sans-serif;">
    <span>
        Diese Website verwendet Cookies, um Ihre Erfahrung zu verbessern. 
        <a href="/policy/datenschutz" style="color: #f1d600; text-decoration: underline;">Mehr erfahren</a>
    </span>
    <button onclick="acceptCookies()" style="margin-left: 15px; padding: 8px 15px; background-color: #f1d600; border: none; color: #000; font-weight: bold; cursor: pointer;">Akzeptieren</button>
</div>

<script>
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  return parts.length === 2 ? parts.pop().split(';').shift() : null;
}

function acceptCookies() {
  document.cookie = "cookies_accepted=true; path=/; max-age=" + 60 * 60 * 24 * 365;
  document.getElementById("cookie-banner").style.display = "none";
//   loadOptionalScripts(); 
}

function loadOptionalScripts() {
  // Example: Google Analytics (only load if accepted)
  const script = document.createElement('script');
  script.src = "https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID";
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
}

window.addEventListener("load", function() {
  if (!getCookie("cookies_accepted")) {
    document.getElementById("cookie-banner").style.display = "block";
  } else {
    // loadOptionalScripts(); // Consent already given
  }
});
</script>
