<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201221234641 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creando tabla de calificaciones';
    }

    public function up(Schema $schema) : void
    {
        $table = $schema->createTable('personal');
        $table->addColumn('id','bigint',['autoincrement' => true]);
        $table->addColumn('user_id','bigint');
        $table->addColumn('nombre','string');
        $table->addColumn('apellidos','string');
        $table->addColumn('created_at','datetime');
        $table->addColumn('updated_at','datetime');
        $table->setPrimarykey(['id']);
        $table->addForeignKeyConstraing('users', ['user_id'], ['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('alumnos');
    }
}
