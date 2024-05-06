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

{block name='page_header_container'}{/block}

{if $layout === 'layouts/layout-left-column.tpl'}
  {block name="left_column"}
    <div id="left-column" class="col-xs-12 col-md-4 col-lg-3">
      {hook h='displayContactLeftColumn'}
    </div>
  {/block}
{else if $layout === 'layouts/layout-right-column.tpl'}
  {block name="right_column"}
    <div id="right-column" class="col-xs-12 col-md-4 col-lg-3">
      {hook h='displayContactRightColumn'}
    </div>
  {/block}
{/if}

{block name='page_content'}
  <div class="banner_contact" style="position: relative;">
    <img src="//thehamiltoncollection.com/cdn/shop/files/Screen_Shot_2022-09-29_at_3.01.06_PM.png?v=1664481680&width=1500" style="width: 100%;max-height:600px;object-fit:cover;"/>
    <h1 style="position:absolute;width:100%;height:100%;top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 3rem;
    color: #fff;
    background: rgba(0,0,0,0.5);">{l s='Contact Us' d='Shop.Theme.Asgarage'}</h1>
  </div>
  {hook h='displayContactContent'}
{/block}
