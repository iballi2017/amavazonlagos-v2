
class ContentToggle {
    control;
    content;
    event;
    hidden = 'hidden';
    slideLeft = 'slide-left';
    constructor(control, content, event = "click") {
        this.control = control;
        this.content = content;
        this.event = event;
    }

    toggle() {
        this.control && this.control.addEventListener(this.event, () => {
            this.content.classList.toggle(this.hidden);
        })
    }

    slide_left_toggle() {
        // alert("yes!");
        this.control && this.control.addEventListener(this.event, () => {
            this.content.classList.toggle(this.slideLeft);
        })
    }
}

export default ContentToggle;