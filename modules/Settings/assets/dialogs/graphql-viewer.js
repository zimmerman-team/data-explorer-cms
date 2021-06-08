export default {

    data() {

        return {
            loaded: false
        }
    },

    computed: {
        iframeSrc() {

            let computedStyle = getComputedStyle(document.documentElement);

            let bgColor = computedStyle.getPropertyValue('--kiss-base-background-color').trim().replace('#', '%23');
            let primaryColor = computedStyle.getPropertyValue('--kiss-color-primary').trim().replace('#', '%23');
            let textColor = computedStyle.getPropertyValue('--kiss-base-text-color').trim().replace('#', '%23');

            return this.$route(`/settings/api/graphqlViewer?bgColor=${bgColor}&primaryColor=${primaryColor}&textColor=${textColor}`)
        }
    },

    template: /*html*/`

        <div class="app-offcanvas-container">
            <div class="app-offcanvas-content kiss-position-relative kiss-bgcolor-contrast kiss-flex-1 kiss-flex kiss-flex-middle kiss-flex-center">
                <div v-if="!loaded"><app-loader></app-loader></div>
                <iframe :src="iframeSrc" style="position:absolute;top:0;left:0;width:100%;height:100%;" @load="loaded=true"></iframe>
            </div>
        </div>
    `,
}