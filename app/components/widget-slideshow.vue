<template>

    <div class="uk-grid pk-grid-large" data-uk-grid-margin>
        <div class="uk-flex-item-1 uk-form-horizontal">

            <div class="uk-form-row">
                <label for="form-title" class="uk-form-label">{{ 'Title' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-title" class="uk-form-width-large" type="text" name="title" v-model="widget.title" v-validate:required>
                    <p class="uk-form-help-block uk-text-danger" v-show="form.title.invalid">{{ 'Title cannot be blank.' | trans }}</p>
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="form-test">{{ 'Test' | trans}}</label>
                <div class="uk-form-controls">
                    <input id="form-test" class="uk-form-width-large" type="text" name="test" v-model="widget.data.test">
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label">{{ 'Images' | trans }}</label>

                <div class="uk-form-controls">
                    <input-image-meta :image.sync="widget.data.image" class="pk-image-max-height"></input-image-meta> <!-- :image.sync="project.image.main" -->
                </div>
            </div>

        </div>

        <div class="pk-width-sidebar pk-width-sidebar-large">
            <div class="uk-form-row">
                <label for="form-height" class="uk-form-label">{{ 'Height' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-height" class="uk-width-1-1" type="text" v-model="widget.data.config.height">
                </div>
            </div>

            <partial name="settings"></partial>

        </div>
    </div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Settings'
        },
        replace: false,
        props: ['widget', 'config', 'form'],

        created() {
            this.$options.partials = this.$parent.$options.partials;
        },

        methods: {

        },
    };
    window.Widgets.components['jebster-slideshow-widget:settings'] = module.exports;
</script>