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
          <a>
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
