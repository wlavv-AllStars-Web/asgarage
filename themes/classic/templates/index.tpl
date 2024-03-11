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
      </section>
    {/block}
