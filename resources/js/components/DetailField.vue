<template>
    <panel-item :field="field">
        <template v-if="field.value" slot="value">
            <div class="quadiaplayer-container">
                <script src="https://player.quadia.net/quadia.player.min.js"
                        :data-video-id="'field.value'"
                ></script>
            </div>
        </template>
    </panel-item>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
    }
</script>
