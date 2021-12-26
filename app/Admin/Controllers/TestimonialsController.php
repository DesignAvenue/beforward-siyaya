<?php

namespace App\Admin\Controllers;

use App\Models\Testimonials;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TestimonialsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Testimonials';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Testimonials());

        $grid->column('id', __('Id'));
        $grid->column('body', __('Body'));
        $grid->column('image_path', __('Image path'));
        $grid->column('name', __('Name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Testimonials::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('body', __('Body'));
        $show->field('image_path', __('Image path'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Testimonials());

        $form->textarea('body', __('Body'));
        $form->image('image_path', __('Image path'));
        $form->text('name', __('Name'));

        return $form;
    }
}
