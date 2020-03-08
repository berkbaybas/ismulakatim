<template>
<footer>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="shape-fill footer-svg" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
    </svg>
    <div class="wrapperFooter">
        <h3 class="text-center mb-4">ismulakatim.com</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="wrapperFooterBox">
                        <h4>İletişim</h4>
                        <a class="footer-link" href="mailto:destek@ismulakatim.com">destek@ismulakatim.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapperFooterBox">
                        <h4>En çok Aranan Şirketler</h4>
                        <router-link to="/mulakatlar/Oyak%20Renault"  active-class="active" exact><a class="footer-link">Oyak - Renault</a></router-link>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapperFooterBox">
                        <h4>En çok Aranan İşler</h4>
                        <p>Bigisayar Mühendisliği</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</template>
