import type { Directive } from 'vue';

const revealDirective: Directive = {
    // 當綁定的元素掛載到 DOM 時
    mounted(el) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    el.classList.add('visible');
                    observer.unobserve(el); // 觸發後停止觀察
                }
            });
        }, {
            threshold: 0.12
        });

        observer.observe(el);
        
        // 將 observer 存起來方便卸載時清理
        (el as any)._observer = observer;
    },
    // 當元素卸載時
    unmounted(el) {
        if ((el as any)._observer) {
            (el as any)._observer.disconnect();
        }
    }
};

export default revealDirective;