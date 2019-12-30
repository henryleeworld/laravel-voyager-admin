<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
        $this->categoriesTranslations();
        $this->pagesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function categoriesTranslations()
    {
        // Adding translations for 'categories'
        //
        $cat = Category::where('slug', 'category-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('zh-TW', $this->arr(['categories', 'slug'], $cat->id), 'DIY 電腦');
            $this->trans('zh-TW', $this->arr(['categories', 'name'], $cat->id), 'DIY 電腦新上架商品');
        }
        $cat = Category::where('slug', 'category-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('zh-TW', $this->arr(['categories', 'slug'], $cat->id), '網路硬碟');
            $this->trans('zh-TW', $this->arr(['categories', 'name'], $cat->id), 'Synology 原廠配件');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.post.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '文章');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.page.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '頁面');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.user.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '使用者');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.category.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '分類');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.menu.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '選單');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.role.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '角色');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.post.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '文章');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.page.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '頁面');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.user.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '使用者');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '分類');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.menu.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '選單');
        }
        $dtp = DataType::where($_fld, __('voyager::seeders.data_types.role.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $dtp->id), '角色');
        }
    }

    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_arr = $this->arr(['pages', 'title'], $page->id);
            $this->trans('zh-TW', $_arr, '亨利的世界');
            /**
             * For configuring additional languages use it e.g.
             *
             * ```
             *   $this->trans('es', $_arr, 'hola-mundo');
             *   $this->trans('de', $_arr, 'hallo-welt');
             * ```
             */
            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('zh-TW', $_arr, '如果你一開口講話後，別人就沈默或只聽你講、只跟著你講，那這很可能不是件好事');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('zh-TW', $_arr, '<p>只要存在著地位不平等或角色不同，導致地位高的角色或資深/常做決策的人員一開口，大家就會把自己的意見吞回去，</p>'
                ."\r\n".'<p>那麼所謂的自主管理很容易變成假象，沒有自主管理，就不容易持續改善，因為一切都是推力，而不是團隊自我產生的拉力跟內聚力。</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.dashboard'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '儀表板');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.media'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '媒體');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.posts'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '文章');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.users'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '使用者');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.categories'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '分類');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.pages'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '頁面');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.roles'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '角色');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.tools'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '工具');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.menu_builder'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '選單製作');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.database'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '資料庫');
        }

        $_item = $this->findMenuItem(__('voyager::seeders.menu_items.settings'));
        if ($_item->exists) {
            $this->trans('zh-TW', $this->arr($_tpl, $_item->id), '設置');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}
