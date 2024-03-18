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

{* {block name='page_title'}
  {$cms.meta_title}
{/block} *}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id}">

  
      
    {block name='cms_content'}
      {if $cms.id === 6}
        <div class="collection_banner">
          <img src="//thehamiltoncollection.com/cdn/shop/files/IMG_6527-Edit_copy_78c1643c-98d3-41bf-90bd-da2d627ce3a6.jpg?v=1664478525&width=1500" style="width: 100%;"/>
          <div class="banner-title">
            <h1>The Fleet</h1>
          </div>
        </div>
        <div class="collection_container">
          <div class="collection_content">
          <a>
            <div class="card">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC00792-1.jpg?v=1708616454&width=533" />
              </div>
              <h3>Dodge Daytona</h3>
            </div>
          </a>
          <a href="{$link->getCMSLink(8)|escape:'html':'UTF-8'}">
            <div class="card">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC01309-Enhanced-NR.jpg?v=1708615700&width=533" />
              </div>
              <h3>Lamborghini Gallardo</h3>
            </div>
          </a>
          <a>
            <div class="card">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/DSC08179-Enhanced-SR_1_4.jpg?v=1699578025&width=533" />
              </div>
              <h3>Mercedes G63 4x4²</h3>
            </div>
          </a>
          <a>
            <div class="card">
              <div class="card-img" style="overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/articles/Aventador_SV.jpg?v=1697760992&width=533" />
              </div>
              <h3>Lamborghini Aventador SV Roadster</h3>
            </div>
          </a>
          </div>
        </div>
        
      {elseif $cms.id === 7}
        <div class="mission_banner">
          <img src="//thehamiltoncollection.com/cdn/shop/files/017FEE00-2576-4B7A-89A8-79715654691C.jpg?v=1664478058&width=1500" style="width: 100%;"/>
          <div class="banner-title">
            <h1>Driven to Give Back</h1>
            <p>To enrich the lives of others by providing unparalleled access to unique and exotic vehicles and to have a lot of fun while doing it.</p>
          </div>
        </div>
        <div class="mission_content">
          <div class="mission_video">
            <div class="videosContainer" style="padding: 2rem 0;">
              <div class="video3 video" style="display: flex;justify-content:center;">
                <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="width: 1280px;position:relative;border-radius:12px;overflow:hidden;">
                <img src="//thehamiltoncollection.com/cdn/shop/files/journey.jpg?v=1663813264&width=3840" style="min-width: 32vw;" loading="lazy" alt="banner"/>
                  <span class="deferred-media__poster-button motion-reduce" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation" class="icon icon-play" fill="none" viewBox="0 0 12 14" style="width: 40px;position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-32%,-50%);">
                      <path style="color: #fff;" fill-rule="evenodd" clip-rule="evenodd" d="M1.48177 0.814643C0.81532 0.448245 0 0.930414 0 1.69094V12.2081C0 12.991 0.858787 13.4702 1.52503 13.0592L10.5398 7.49813C11.1918 7.09588 11.1679 6.13985 10.4965 5.77075L1.48177 0.814643Z" fill="currentColor"></path>
                    </svg>
                  </span>
                </div>
                <div  class="iframeClass"  style="display:none;width:1280px;height:720px;">
                  <iframe allowfullscreen frameborder="0" src="https://www.youtube.com/embed/YJgXHm6HONo?autoplay=0&mute=1&rel=0" loading="lazy" style="width: 1280px;height:720px;">
                  </iframe>
                </div>
              </div>
            </div>

            <div class="mission_statement">
              <h1>Mission Statement</h1>
              <p>Hi, my name is Steve Hamilton! Here is a little about me.</p>
              <br>
              <p>Growing up, my family lived off of welfare. I didn’t have money to play sports, go on field trips, or sometimes to even buy new clothes. I worked my way through my teenage years whether it was being a caddie at the age of 13, flipping burgers at McDonald’s at 14 or fixing bikes as a side hustle. Luckily, I was born with that entrepreneurial spirit. I don’t regret my childhood, though. It is what made me who I am today.</p>
              <br>
              <p>My mission for the collection now is simple: I am driven to give back. I put the cars to use by taking them out to charity events to help spread awareness or raise money for important causes. As the collection grows, I am committed to continuing to let car enthusiasts of all ages enjoy the vehicles and remain focused on using the collection to make the world a better place.</p>
              <br>
              <p>On top of all of that? These cars aren’t trophies to me. They are vehicles, and they are meant to be driven. So we’re also going to have plenty of fun along the way!</p>
            </div>


          </div>
        </div>
        <div class="mission_newsletter">
            {hook h='displayHome' mod='ps_emailsubscription' id_module=19}
        </div>
        <div class="featured_merch">
          {hook h='displayHome' mod='ps_featuredproducts' id_module=13}
        </div>
      {elseif $cms.id === 8}
        <div class="collection_car">
          <div class="collection_car_header">
            <img src="https://thehamiltoncollection.com/cdn/shop/articles/DSC01309-Enhanced-NR.jpg?v=1708615700&width=1100" />
          </div>
          <div class="collection_car_content">
            <h1>Lamborghini Gallardo</h1>
            <p>2009 Lamborghini Gallardo</p>
            <div class="content_img_container" >
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01309-Enhanced-NR_2048x2048.jpg?v=1707434203" />
            </div>
            <div class="content_img_container">
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01306_2048x2048.jpg?v=1708615239" />
            </div>
            <div class="content_img_container">
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01274_2048x2048.jpg?v=1708615241"  />
            </div>
            <div class="content_img_container">
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01282_2048x2048.jpg?v=1708615241" />
            </div>
            <div class="content_img_container">
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01301_2048x2048.jpg?v=1708615240" />
            </div>
            <div class="content_img_container">
              <img src="https://cdn.shopify.com/s/files/1/0625/2013/1789/files/DSC01274_2048x2048.jpg?v=1708615241"  />
            </div>
            <div class="goBackButton">
            <a href="{$link->getCMSLink(7)|escape:'html':'UTF-8'}">Go back to collection</a>
            </div>
          </div>
        </div>
      {else}
      {$cms.content nofilter}
      {/if}
    {/block}
  
    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
{/block}
