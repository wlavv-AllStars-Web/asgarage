{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file='page.tpl'}

    {block name='page_content_container'}
      
      <section id="content" class="page-home">
        <div class="header-bottom" style="background: linear-gradient(310deg, rgb(56, 78, 197) 0%, rgba(255, 58, 129, 0.8) 52%, rgb(255, 201, 104) 100%);">
          <div class="container">
            <div class="row">
            <div class="header-bottom-content">
              <h1>Want to Drive a Hyper/Supercar from the Collection?</h1>
              <h6>Sign up for a rental slot below!</h6>
              <div class="btn">Schedule Rental Here!</div>
            </div>
            </div>
          </div>
        </div>
        {block name='page_content_top'}{/block}
          <div class="videoBox" style=""><div class="fullscreen-video-wrap" style="height: 754px;">
              <video style="height: 754px;width:100%;object-fit:cover;" class="video-js" loop="" autoplay="" preload="none" muted="" playsinline="" poster="https://thehamiltoncollection.com/cdn/shop/files/Thumbnail.png?v=1664567119">
                <source src="https://cdn.shopify.com/videos/c/o/v/466d9c8084dc46b5924f9153eb28807e.mp4" type="video/mp4">
              </video>
            </div>
            <div class="" style="background: #373737;padding:2rem 0">
              <h1 style="color: #fafafa;text-align:center;font-size:3rem;">Driven to Give Back.</h1>
              <h5 style="color: #c9c9c9;text-align:center;font-size:1.25rem;">To enrich the lives of others by providing unparalleled access to unique and exotic vehicles and to have a lot of fun while doing it.</h5>
            </div>
          </div>
        {* {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
          {/block}
        {/block} *}
        {hook h='displayHome' mod='ps_featuredproducts' id_module=13}

        <div class="container">
          <div class="mission-journey">
            <div class="mission-journey-img">
              <img src="https://thehamiltoncollection.com/cdn/shop/files/website__4_Large_467d6ef1-c747-4e4e-8f97-7d3b5c56d1c7.jpg?v=1664430332&width=750" style="width: 100%;height:100%;object-fit:cover !important;"/>
            </div>
            <div class="mission-journey-content">
              <h1>{l s='Mission & Journey' d='Shop.Theme.Mission'}</h1>
              <p>{l s='My mission for the collection now is simple: I am driven to give back. I put the cars to use by taking them out to charity events to help spread awareness or raise money for important causes. As the collection grows...' d='Shop.Theme.Mission'}</p>
              <a class="btn_read_more">{l s='Read More' d='Shop.Theme.Mission'}</a>
            </div>
          </div>
        </div>

        <div class="container collection">
          <h1>{l s='The Collection' d='Shop.Theme.Collection'}</h1>
          <div class="collection-content" style="display: flex;">
            <div class="card" style="flex:1">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC00792-1.jpg?v=1708616454&width=533" />
              </div>
              <h3>Dodge Daytona</h3>
            </div>
            <div class="card" style="flex:1">
            <a href="{$link->getCMSLink(8)|escape:'html':'UTF-8'}">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC01309-Enhanced-NR.jpg?v=1708615700&width=533" />
              </div>
              <h3>Lamborghini Gallardo</h3>
              </a>
            </div>
            <div class="card" style="flex:1">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC08179-Enhanced-SR_1_4.jpg?v=1699578025&width=533" />
              </div>
              <h3>Mercedes G63 4x4²</h3>
            </div>
            <div class="card" style="flex:1">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/Aventador_SV.jpg?v=1697760992&width=533" />
              </div>
              <h3>Lamborghini Aventador SV Roadster</h3>
            </div>
          </div>
          <div class="navigation_collection">
            <button id="previousButton"><</button>
            <div id="carouselCounter">1/4</div>
            <button id="nextButton">></button>
          </div>
          <div class="container-all-product-link">
            <a class="all-product-link float-xs-left float-md-right h4" href="{$link->getCMSLink(6)|escape:'html':'UTF-8'}"">
              {l s='VIEW ALL' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
            </a>
          </div>
        </div>
      </section>
    {/block}
