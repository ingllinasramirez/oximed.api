<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portafolios', function (Blueprint $table) {
            $table->id();

            $table->string('itemPortafolioMODOCOMERCIAL', 50)->nullable();
            $table->string('itemPortafolioPROCESOINDUSTRIAL', 50)->nullable();
            $table->string('itemPortafolioTIPO', 50)->nullable();
            $table->string('itemPortafolioGRUPOINVENTARIOS', 50)->nullable();
            $table->string('itemPortafolioCODIGO', 50)->nullable();
            $table->string('itemPortafolioSERIAL', 50)->nullable();
            $table->string('itemPortafolioNOMBRE', 50)->nullable();
            $table->string('itemPortafolioINVENTARIABLE', 50)->nullable();
            $table->string('itemPortafolioMEDIDAFACTURAELECTRONICA', 50)->nullable();
            $table->string('itemPortafolioMEDIDAIMPRESIONFACTURA', 50)->nullable();
            $table->string('itemPortafolioREFERENCIAFABRICA', 50)->nullable();
            $table->string('itemPortafolioCODIGOBARRAS', 50)->nullable();
            $table->string('itemPortafolioPROPIEDAD', 50)->nullable();
            $table->string('itemPortafolioPROPIETARIO', 50)->nullable();
            $table->string('itemPortafolioDESCRIPCION', 50)->nullable();
            $table->string('itemPortafolioCLASIFICACIONTRIBUTARIA', 50)->nullable();
            $table->string('itemPortafolioCODIGOIMPUESTOCARGOUNO', 50)->nullable();
            $table->string('itemPortafolioVALORIMPUESTOCARGOUNO', 50)->nullable();
            $table->string('itemPortafolioCODIGOIMPUESTOCARGODOS', 50)->nullable();
            $table->string('itemPortafolioVALORIMPUESTOCARGODOS', 50)->nullable();
            $table->string('itemPortafolioCODIGOIMPUESTOBOLSAS', 50)->nullable();
            $table->string('itemPortafolioCODIGOIMPUESTORETENCION', 50)->nullable();
            $table->string('itemPortafolioMEDIDACAPACIDADTOTAL', 50)->nullable();
            $table->string('itemPortafolioMEDIDACAPACIDADUNIDAD', 50)->nullable();
            $table->string('itemPortafolioINCLUYEIVA', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA1', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA2', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA3', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA4', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA5', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA6', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA7', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA8', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA9', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA10', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA11', 50)->nullable();
            $table->string('itemPortafolioPRECIOVENTA12', 50)->nullable();
            $table->string('itemPortafolioCODIGOARANCELARIO', 50)->nullable();
            $table->string('itemPortafolioMARCA', 50)->nullable();
            $table->string('itemPortafolioMODELO', 50)->nullable();
            $table->string('itemPortafolioURLIMAGEN', 50)->nullable();
            $table->string('itemPortafolioURLQR', 50)->nullable();
            $table->string('itemPortafolioURLBARRAS', 50)->nullable();
            $table->string('itemPortafolioOBSERVACIONES', 50)->nullable();
            $table->string('itemPortafolioULTIMAUBICACIONLATITUD', 50)->nullable();
            $table->string('itemPortafolioULTIMAUBICACIONLONGITUD', 50)->nullable();
            $table->string('itemPortafolioULTIMAUBICACIONFECHA', 50)->nullable();
            $table->string('itemPortafolioUSRCREO', 50)->nullable();
            $table->string('itemPortafolioUSRCAMBIO', 50)->nullable();
            $table->string('itemPortafolioUSRDESACTIVO', 50)->nullable();
            $table->string('itemPortafolioFCHDESACTIVO', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portafolios');
    }
};
