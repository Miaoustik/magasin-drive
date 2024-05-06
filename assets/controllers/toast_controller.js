import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    connect() {
        window.setTimeout(() => {
            this.element.remove()
        }, 2000)
    }

    close() {
        this.element.remove()
    }
}