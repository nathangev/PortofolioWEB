<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test the portfolio page renders successfully with all required sections.
     */
    public function test_portfolio_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Nathan');
        $response->assertSee('Toko Sumber Makmur POS');
        $response->assertSee('MBG Smart Logistics');
        $response->assertSee('Computer Vision Leaf Pathology');
        $response->assertSee('SIMKOST Boarding House System');
        $response->assertSee('Quantitative Biomarker Analysis');
        $response->assertSee('https://github.com/nathangev/Toko_SE_Semester4');
        $response->assertSee('https://www.figma.com/design/gkB6gDssRcHJO7qVmjgXiZ/FINPRO-LAB-DATABASE-SIMKOST');
        $response->assertSee('FIFO batch inventory');
        $response->assertSee('11-table schema');
    }
}
