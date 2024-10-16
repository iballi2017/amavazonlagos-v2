export default
    class ActiveTabLink {
    constructor(defaultLink) {
        // Get URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab') || defaultLink;

        console.log({ tab })

        // Hide all tab contents and remove active classes from all tab links
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-link').forEach(el => {
            el.removeAttribute('aria-current')
        });

        // Show the active tab content and add active class to the corresponding tab link
        document.querySelector(`#tab-${tab}`)?.classList.remove('hidden');
        console.log({ tab: `#tab-${tab}` })
        console.log({ tab__: document.querySelector(`#tab-${tab}`) });
        // console.log({ tab: document.querySelector(`#tab-schedule-pickup`) });
        document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`)?.setAttribute('aria-current', 'page');
    }

    activate() {


    }
}