

.hero-section {
    display: grid;
    grid-template-columns: 1fr 0.9fr;
    align-items: center;
    gap: 48px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 80px 24px;
    overflow: hidden;
}

.hero-content {
    min-width: 0;
}

.hero-content .hero-label {
    color: #397c50;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.hero-content h1 {
    color: #29372e;
    font-size: clamp(36px, 4vw, 60px);
    line-height: 1.15;
    font-weight: 800;
    margin-bottom: 22px;
}

.hero-content .hero-description {
    color: #66756b;
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 28px;
}

.hero-actions {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 18px;
}


.hero-image {
    width: 100%;
    min-width: 0;
    text-align: center;
}

.hero-image img {
    display: block;
    width: 100%;
    max-width: 540px;
    height: auto;
    aspect-ratio: 1 / 0.8;
    object-fit: contain;
    margin: 0 auto;
    border-radius: 28px;
    cursor: default;
}

.hero-caption {
    margin-top: 14px;
    text-align: center;
    color: #344b3b;
}

.hero-caption p {
    margin: 4px 0;
}

/* ===== RESPONSIVE MOBILE ===== */
@media (max-width: 768px) {
    .hero-section {
        grid-template-columns: 1fr;
        gap: 32px;
        padding: 44px 20px;
    }

    .hero-content h1 {
        font-size: 38px;
    }

    .hero-content .hero-description {
        font-size: 16px;
    }

    .hero-image img {
        max-width: 100%;
    }
}
